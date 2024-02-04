<?php

namespace App\Http\Controllers\adminpnlx;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Battles;
use App\Models\User;
use Redirect,Session,Config;

class BattlesResultController extends Controller
{
    public $model      =   'battles-result';
    public function __construct(Request $request)
    {   
        parent::__construct();
        View()->share('model', $this->model);
        $this->request = $request;
    }

    public function index(Request $request)
	{
		$DB					=	Battles::query();
		$DB->select('battles.*','users.vplay_id','games.game_name')
				->leftJoin('users', 'users.id' ,"=","battles.creator_id")
				->leftJoin('games', 'games.id' ,"=","battles.game_id");
		$searchVariable		=	array();
		$inputGet			=	$request->all();
		if ($request->all()) {
			$searchData			=	$request->all();
			unset($searchData['display']);
			unset($searchData['_token']);

			if (isset($searchData['order'])) {
				unset($searchData['order']);
			}
			if (isset($searchData['sortBy'])) {
				unset($searchData['sortBy']);
			}
			if (isset($searchData['page'])) {
				unset($searchData['page']);
			}
			if ((!empty($searchData['date_from'])) && (!empty($searchData['date_to']))) {
			    $dateS = date("Y-m-d",strtotime($searchData['date_from']));
                $dateE = date("Y-m-d",strtotime($searchData['date_to']));
				$DB->whereBetween('battles.created_at', [$dateS . " 00:00:00", $dateE . " 23:59:59"]);
			} elseif (!empty($searchData['date_from'])) {
				$dateS = date("Y-m-d",strtotime($searchData['date_from']));
				$DB->where('battles.created_at', '>=', [$dateS . " 00:00:00"]);
			} elseif (!empty($searchData['date_to'])) {
				$dateE = date("Y-m-d",strtotime($searchData['date_to']));
				$DB->where('battles.created_at', '<=', [$dateE . " 00:00:00"]);
			}
			foreach ($searchData as $fieldName => $fieldValue) {
				if ($fieldValue != "") {
                   
                    if ($fieldName == "battle_id") {
                        $DB->where("battles.battle_id", 'like', '%' . $fieldValue . '%');
                    }
				}
				$searchVariable	=	array_merge($searchVariable, array($fieldName => $fieldValue));
			}
		}
		$DB->where('game_status','3')->where('approve','approved');
		$sortBy = ($request->input('sortBy')) ? $request->input('sortBy') : 'battles.created_at';
		$order  = ($request->input('order')) ? $request->input('order')   : 'DESC';
		$records_per_page	    =	($request->input('per_page')) ? $request->input('per_page') : Config::get("Reading.records_per_page");
		$results = $DB->orderBy($sortBy, $order)->paginate($records_per_page);
        $complete_string		=	$request->query();
		unset($complete_string["sortBy"]);
		unset($complete_string["order"]);
		$query_string			=	http_build_query($complete_string);
		$results->appends($inputGet)->render();
        $resultcount = $results->count();
        return  View("admin.$this->model.index", compact('resultcount', 'results', 'searchVariable', 'sortBy', 'order', 'query_string'));
	}

	public function show($battle_id = null)
    {
        $battle_ids      =  base64_decode($battle_id);
        $battlesInfo     =  Battles::leftJoin('users', 'users.id' ,"=","battles.reffer_id")
        							->find($battle_ids);
        // dd($battlesInfo);
        if($battlesInfo != '') {
        	$creator_details = User::where('id', $battlesInfo->creator_id)->first(); 
			$joiner_details  = User::where('id', $battlesInfo->joiner_id)->first(); 
			$winner          = User::where('id', $battlesInfo->winner_id)->first();
			$loser           = User::where('id', $battlesInfo->loser_id)->first();
            return  View("admin.$this->model.view",compact('battlesInfo','creator_details','joiner_details','winner','loser'));
        }else {
            return redirect()->route($this->model . ".index");
        }
    }
}


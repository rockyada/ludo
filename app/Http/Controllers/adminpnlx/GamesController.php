<?php

namespace App\Http\Controllers\adminpnlx;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Games;
use Redirect,Session,Config;

class GamesController extends Controller
{
    public $model      =   'games';
    public function __construct(Request $request)
    {   
        parent::__construct();
        View()->share('model', $this->model);
        $this->request = $request;
    }

    public function index(Request $request)
	{
		$DB					=	Games::query();
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
				$DB->whereBetween('created_at', [$dateS . " 00:00:00", $dateE . " 23:59:59"]);
			} elseif (!empty($searchData['date_from'])) {
				$dateS = date("Y-m-d",strtotime($searchData['date_from']));
				$DB->where('created_at', '>=', [$dateS . " 00:00:00"]);
			} elseif (!empty($searchData['date_to'])) {
				$dateE = date("Y-m-d",strtotime($searchData['date_to']));
				$DB->where('created_at', '<=', [$dateE . " 00:00:00"]);
			}
			foreach ($searchData as $fieldName => $fieldValue) {
				if ($fieldValue != "") {
                    if ($fieldName == "mobile") {
                        $DB->where("mobile", 'like', '%' . $fieldValue . '%');
                    }
                    if ($fieldName == "is_blocked") {
                        $DB->where("is_blocked",$fieldValue);
                    }
				}
				$searchVariable	=	array_merge($searchVariable, array($fieldName => $fieldValue));
			}
		}

		$sortBy = ($request->input('sortBy')) ? $request->input('sortBy') : 'created_at';
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

	
    public function create(Request $request)
    {       
        return  View("admin.$this->model.add");
    }

    public function store(Request $request){
       if ($request->isMethod('POST')) {
            $validator                     =   Validator::make($request->all(), 
                array(
                    'game_name'            => 'required',
                    'game_image'           => 'required',
                )
            );
            if($validator->fails()) {
    			return Redirect::back()->withErrors($validator)->withInput();
    		}else{

                $games                 =    new Games;
                $games->game_id        =    'game'.'_'.rand(1111,9999);
                $games->game_name      =    $request->game_name ?? null;
                $games->url            =    str_replace("-", " ", $request->game_name);
                $games->api_url        =    $request->api_url ?? null;
                if($request->hasFile('game_image')){
                    $extension         =    $request->file('game_image')->getClientOriginalExtension();
                    $fileName          =    time().'-image.'.$extension;
                    $folderName        =    strtoupper(date('M'). date('Y'))."/";
                    $folderPath        =    Config('constants.GAMES_IMAGE_ROOT_PATH').$folderName;
                    if($request->file('game_image')->move($folderPath, $fileName)){
                        $games->game_image  = $folderName.$fileName;
                    }
                }
                $games->save();

                Session()->flash('flash_notice', ucfirst(Config('constants.GAMES.GAMES_TITLE')." has been added successfully"));
                return Redirect()->route($this->model . ".index");
            }
        } 
    }

    public function edit(Request $request,  $game_id = null)
    {   
        $gameIds      =  base64_decode($game_id);
        $gamesInfo    =  Games::find($gameIds);
        if($gamesInfo != '') {
            return  View("admin.$this->model.edit", compact('gamesInfo','game_id'));
        }else {
            return redirect()->route($this->model . ".index");
        }
    }

    public function update(Request $request,  $game_id = null){
        if ($request->isMethod('PUT')) {
            $gamesIds      =  base64_decode($game_id);
            $games         = Games::find($gamesIds);

            if($games != '') {

            	$validator                     =   Validator::make($request->all(), 
	                array(
	                    'game_name'            => 'required',
	                    'game_image'           => $games->game_image != '' ? 'nullable' : 'required',
	                )
	            );
	            if($validator->fails()) {
	    			return Redirect::back()->withErrors($validator)->withInput();
	    		}else{

	                $games->game_name      =    $request->game_name ?? null;
	                $games->url            =    str_replace("-", " ", $request->game_name);
	                $games->api_url        =    $request->api_url ?? null;
	                if($request->hasFile('game_image')){
	                    $extension         =    $request->file('game_image')->getClientOriginalExtension();
	                    $fileName          =    time().'-image.'.$extension;
	                    $folderName        =    strtoupper(date('M'). date('Y'))."/";
	                    $folderPath        =    Config('constants.GAMES_IMAGE_ROOT_PATH').$folderName;
	                    if($request->file('game_image')->move($folderPath, $fileName)){
	                        $games->game_image  = $folderName.$fileName;
	                    }
	                }
	                $games->save();

	                Session()->flash('flash_notice', ucfirst(Config('constants.GAMES.GAMES_TITLE')." has been updated successfully"));
	                return Redirect()->route($this->model . ".index");
	            }

            }else {
                return redirect()->route($this->model . ".index");
            }
        }
    }

    public function changeStatus($gamesIds = 0, $status = 0)
    {
        if ($status == 1) {
            $statusMessage   =   trans(Config('constants.GAMES.GAMES_TITLE'). " has been activated successfully");
        } else {
            $statusMessage   =   trans(Config('constants.GAMES.GAMES_TITLE'). " has been deactivated successfully");
        }

        $games = Games::find($gamesIds);
        if ($games != '') {
            $games->status = $status;
            $games->save();
        }
        Session()->flash('flash_notice', $statusMessage);
        return back();
    }

    public function show($gameIds = null)
    {
        $gameId       =  base64_decode($gameIds);
        $gamesInfo    =  Games::find($gameId);
        if($gamesInfo != '') {
            return  View("admin.$this->model.view",compact('gamesInfo'));
        }else {
            return redirect()->route($this->model . ".index");
        }
    }
}


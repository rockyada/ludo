<?php

namespace App\Http\Controllers\adminpnlx;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Battles;
use App\Models\User;
use App\Models\Comissions;
use App\Models\Admin;
use Redirect,Session,Config;

class BattlesDisputeController extends Controller
{
    public $model      =   'battles-dispute';
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
		$DB->where('game_status','3')->where('approve','under_review');
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

    public function battle_pending($battle_id='')
    {
    	$battle_ids      =  base64_decode($battle_id);
        $battlesInfo     =  Battles::find($battle_ids);
        if($battlesInfo != '') {
        	$creator_details = User::where('id', $battlesInfo->creator_id)->first(); 
			$joiner_details  = User::where('id', $battlesInfo->joiner_id)->first();
            return  View("admin.$this->model.battle-pending",compact('battlesInfo','creator_details','joiner_details'));
        }else {
            return redirect()->route($this->model . ".index");
        }	
    }

    public function cancelBattle($battle_id){
		$battle_ids      =  base64_decode($battle_id);
        $battlesInfo     =  Battles::find($battle_ids);
        if($battlesInfo != '') {
        	$battlesInfo->creator_result = 'cancel';
			$battlesInfo->joiner_result = 'cancel';
			$battlesInfo->save();

        	$joiner         = User::where('id',$battlesInfo->joiner_id)->first();
        	$joiner->wallet = $joiner->wallet + $battlesInfo->entry_fee;
	    	$joiner->save();

	    	$creator         = User::where('id',$battlesInfo->creator_id)->first();
		    $creator->wallet = $creator->wallet + $battlesInfo->entry_fee;
		    $creator->save();
  
        	return back()->with('success','Battle Updated Successfully.');

        }else {
            return back();
        }			
	}

	public function updateResult(Request $request,$battle_id='')
	{
		$battle_ids      =  base64_decode($battle_id);
        $battlesInfo     =  Battles::find($battle_ids);
        if($battlesInfo != '') {

        	$creator_details = User::where('id', $battlesInfo->creator_id)->first(); 
		 	$joiner_details  = User::where('id', $battlesInfo->joiner_id)->first(); 
		    $prize           = $battlesInfo->prize;
		    $winner          = $request->winner;
		    if($battlesInfo->creator_id == $winner){
		    	$battlesInfo->creator_result  = 'win';
				$battlesInfo->joiner_result   = 'lost';
				$battlesInfo->winner_id       = $winner;
				$battlesInfo->loser_id        = $battlesInfo->joiner_id;
				$battlesInfo->approve         = 'approved';
				$battlesInfo->save();

				$creator_details->wallet    = $creator_details->wallet + $prize;
				$creator_details->total_win = $creator_details->total_win+1;
				$creator_details->save();

				if(strlen($creator_details->reffered_by)==0){
					$joining_amount  = $battlesInfo->entry_fee;
				    $comission       = Comissions::first();
				    $admin_comission = $comission->battle_comission_without_referral;
					$admin_commision = ($joining_amount)*$admin_comission/100;
				    
				    $admin_details          = User::first();
				    $admin_details->wallet  = $admin_details->wallet+$admin_commision;
				    $admin_details->save();
				  
				    //commision update in battle table
					$battlesInfo->admin_commision = $admin_commision;
					$battlesInfo->save();
				  
				}else{
					$joining_amount   = $battlesInfo->entry_fee;
				    $comission        = Comissions::first();
				    $admin_comission  = $comission->battle_comission_with_referral;
				    $reffer_comission = $comission->refferal_comission;
					$admin_commision  = ($joining_amount)*$admin_comission/100;
				    
				    $admin_details          = User::first();
				    $admin_details->wallet  = $admin_details->wallet+$admin_commision;
				    $admin_details->save();

				    $reffer_user_comission = ($joining_amount)*$reffer_comission/100;
					$reffer_by 			   = $creator_details->reffered_by;
					$refer_user            = User::where('referral_code',$reffer_by)->first();
					$old_wallet_reffer     = $refer_user->wallet_reffer;

					$reffer_user                = User::find($refer_user->id);
					$reffer_user->wallet_reffer = $old_wallet_reffer+$reffer_user_comission;
					$reffer_user->save();

				    //commision update in battle table
					$battlesInfo->admin_commision  = $admin_commision;
					$battlesInfo->reffer_id        = $refer_user->id;
					$battlesInfo->reffer_comission = $reffer_user_comission;
					$battlesInfo->save();

				}
		    }
		    if($battlesInfo->joiner_id == $winner){
		    	$battlesInfo->creator_result  = 'win';
				$battlesInfo->joiner_result   = 'lost';
				$battlesInfo->winner_id       = $winner;
				$battlesInfo->loser_id        = $battlesInfo->creator_id;
				$battlesInfo->approve         = 'approved';
				$battlesInfo->save();

				$user_o       = User::where('id',$battlesInfo->creator_id)->first();
				$old_wallet   = $user_o->wallet;
				$old_game_win = $user_o->total_win;
				
				$joiner_details            = User::find($battlesInfo->joiner_id);
				$joiner_details->wallet    = $old_wallet+$prize;
				$joiner_details->total_win = $old_game_win+1;
				$joiner_details->save();

				if(strlen($creator_details->reffered_by)==0){

					$joining_amount  = $battlesInfo->entry_fee;
				    $comission       = Comissions::first();
				    $admin_comission = $comission->battle_comission_without_referral;
					$admin_commision = ($joining_amount)*$admin_comission/100;
				    
				    $admin_details          = User::first();
				    $admin_details->wallet  = $admin_details->wallet+$admin_commision;
				    $admin_details->save();
				  
				    //commision update in battle table
					$battlesInfo->admin_commision = $admin_commision;
					$battlesInfo->save();
				  
				}else{

					$joining_amount   = $battlesInfo->entry_fee;
				    $comission        = Comissions::first();
				    $admin_comission  = $comission->battle_comission_with_referral;
				    $reffer_comission = $comission->refferal_comission;
					$admin_commision  = ($joining_amount)*$admin_comission/100;
				    
				    $admin_details          = User::first();
				    $admin_details->wallet  = $admin_details->wallet+$admin_commision;
				    $admin_details->save();

				    $reffer_user_comission = ($joining_amount)*$reffer_comission/100;
					$reffer_by 			   = $creator_details->reffered_by;
					$refer_user            = User::where('referral_code',$reffer_by)->first();
					$old_wallet_reffer     = $refer_user->wallet_reffer;

					$reffer_user                = User::find($refer_user->id);
					$reffer_user->wallet_reffer = $old_wallet_reffer+$reffer_user_comission;
					$reffer_user->save();

				    //commision update in battle table
					$battlesInfo->admin_commision  = $admin_commision;
					$battlesInfo->reffer_id        = $refer_user->id;
					$battlesInfo->reffer_comission = $reffer_user_comission;
					$battlesInfo->save();

				}
		    }
        	return redirect()->route($this->model . ".index")->with('success','Battle Updated Successfully.');

        }else {
            return back();
        }
	}
}


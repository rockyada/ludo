<?php

namespace App\Http\Controllers\adminpnlx;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\UsersKycDetails;
use App\Models\UsersBankDetails;
use Redirect,Session,Config;

class PlayersController extends Controller
{
    public $model      =   'players';
    public function __construct(Request $request)
    {   
        parent::__construct();
        View()->share('model', $this->model);
        $this->request = $request;
    }

    public function index(Request $request)
	{
		$DB					=	User::query();
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
            $thisData = $request->all();
            $validator                    =   Validator::make(
                $request->all(), 
                array(
                    'mobile'            => 'required|string|unique:users,mobile',
                    'password'          => 'required|min:6|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
                    'confirm_password'  => 'required|same:password',
                ),
                array(
                    'password.required'         => 'The password field is required.',
                    'password.min'              => '6 digits password to be added which includes at least 1 uppercase, lowercase, and 1 special character.',
                    'password.regex'            => '6 digits password to be added which includes at least 1 uppercase, lowercase, and 1 special character.',
                    'confirm_password.required' => 'The confirm password field is required.',
                    'confirm_password.same'     => 'Confirm the password by re-entering the password here.',
                )
            );
            if($validator->fails()) {
    			return Redirect::back()->withErrors($validator)->withInput();
    		}else{

                $players                 =    new User;
                $players->vplay_id       =    VPLAYID();
                $players->referral_code  =    ReferralCode($request->mobile);
                $players->mobile         =    $request->mobile ?? null;
                $players->password       =    Hash::make($request->password);
                $SavedResponse           =    $players->save();
                if (!$SavedResponse) {
                    Session()->flash('flash_error', trans("Something went wrong."));
                    return Redirect()->back()->withInput();
                } else {

                    $users_other_details             = new UsersKycDetails;
                    $users_other_details->user_id    = $players->id ?? null;
                    $users_other_details->vplay_id   = $players->vplay_id ?? null;
                    $users_other_details->save();

                    $users_bank_details             = new UsersBankDetails;
                    $users_bank_details->user_id    = $players->id ?? null;
                    $users_bank_details->save();

                    Session()->flash('flash_notice', ucfirst(Config('constants.PLAYERS.PLAYERS_TITLE')." has been added successfully"));
                    return Redirect()->route($this->model . ".index");
                }
            }
        } 
    }

    public function edit(Request $request,  $player_id = null)
    {   
        $playerIds     =  base64_decode($player_id);
        $playerInfo    =  User::find($playerIds);
        if($playerInfo != '') {
            return  View("admin.$this->model.edit", compact('playerInfo','player_id'));
        }else {
            return redirect()->route($this->model . ".index");
        }
    }

    public function update(Request $request,  $player_id = null){
        if ($request->isMethod('PUT')) {
            $playerIds     =  base64_decode($player_id);
            $playerInfo    =  User::find($playerIds);

            if($playerInfo != '') {

                $thisData = $request->all();
                $validator                    =   Validator::make($request->all(), 
                    array(
                        'mobile'     => 'required|string|unique:users,mobile,'.$playerInfo->id,
                    )
                );
                if ($validator->fails()) {
                    return Redirect::back()->withErrors($validator)->withInput();
                }else{

                    $playerInfo->mobile       =    $request->mobile ?? null;
                    $SavedResponse            =    $playerInfo->save();

                    if (!$SavedResponse) {
                        Session()->flash('flash_error', trans("Something went wrong."));
                        return Redirect()->back()->withInput();
                    }
                    Session()->flash('flash_notice', ucfirst(Config('constants.PLAYERS.PLAYERS_TITLE')." has been updated successfully"));
                    return Redirect()->route($this->model . ".index");
                }

            }else {
                return redirect()->route($this->model . ".index");
            }
        }
    }

    public function changeStatus($modelId = 0, $status = 0)
    {
        if ($status == 1) {
            $statusMessage   =   trans(Config('constants.PLAYERS.PLAYERS_TITLE'). " has been block successfully");
        } else {
            $statusMessage   =   trans(Config('constants.PLAYERS.PLAYERS_TITLE'). " has been activated successfully");
        }

        $user = User::find($modelId);
        if ($user != '') {
            $user->is_blocked = $status;
            $user->save();
        }
        Session()->flash('flash_notice', $statusMessage);
        return back();
    }

    public function changedPassword(Request $request, $player_id = null)
    {
        $playerIds     =  base64_decode($player_id);
        $playerData    =  User::find($playerIds);
        if($playerData != '') {
            if ($request->isMethod('POST')) {
                $validator                  =   Validator::make($request->all(),
                    array(
                        'new_password'      => 'required|min:6|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
                        'confirm_password'  => 'required|same:new_password',
                    ),
                    array(
                        "new_password.required"      => trans("The new password field is required."),
                        "new_password.min"           => trans("6 digits password to be added which includes at least 1 uppercase, lowercase, and 1 special character."),
                        "new_password.regex"         => trans("6 digits password to be added which includes at least 1 uppercase, lowercase, and 1 special character."),
                        "confirm_password.required"  => trans("The confirm password field is required."),
                        "confirm_password.same"      => trans("The confirm password not matched with new password."),
                    )
                );
                if($validator->fails()) {
                    return Redirect::back()->withErrors($validator)->withInput();
                }else{
                    $playerData->password    =  Hash::make($request->new_password);
                    $SavedResponse           =  $playerData->save();
                    if (!$SavedResponse) {
                        Session()->flash('flash_error', trans("Something went wrong."));
                        return Redirect()->back();
                    }
                    Session()->flash('flash_notice', trans(Config('constants.PLAYERS.PLAYERS_TITLE')." password has been changed successfully."));
                    return Redirect()->route($this->model . '.index');
                }
            }
            return view("admin.$this->model.change_password",compact('player_id'));

        } else {
            return redirect()->route($this->model . ".index");
        }
    }

    public function show($player_id = null)
    {
        $playerIds     =  base64_decode($player_id);
        $playerInfo    =  User::with('users_bank_details','users_kyc_details')->find($playerIds);
        if($playerInfo != '') {
            return  View("admin.$this->model.view",compact('playerInfo'));
        }else {
            return redirect()->route($this->model . ".index");
        }
    }

    public function amountAdd(Request $request, $player_id = null)
    {
        $playerIds     =  base64_decode($player_id);
        $playerInfo    =  User::find($playerIds);
        if($playerInfo != '') {
            $playerInfo->wallet = $request->wallet;
            $playerInfo->save();
            return back()->with('success',"This add has been payment successfully.");
        }else {
            return redirect()->route($this->model . ".index");
        }
    }
}


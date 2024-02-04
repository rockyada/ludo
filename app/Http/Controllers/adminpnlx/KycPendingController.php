<?php

namespace App\Http\Controllers\adminpnlx;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UsersKycDetails;
use Redirect,Session,Config;

class KycPendingController extends Controller
{
    public $model      =   'kyc-pending';
    public function __construct(Request $request)
    {   
        parent::__construct();
        View()->share('model', $this->model);
        $this->request = $request;
    }

    public function index(Request $request)
	{
		$DB					=	UsersKycDetails::query();
		$DB->select('users_kyc_details.*','users.vplay_id')->leftJoin('users', 'users.id' ,"=","users_kyc_details.user_id");
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
				$DB->whereBetween('users_kyc_details.created_at', [$dateS . " 00:00:00", $dateE . " 23:59:59"]);
			} elseif (!empty($searchData['date_from'])) {
				$dateS = date("Y-m-d",strtotime($searchData['date_from']));
				$DB->where('users_kyc_details.created_at', '>=', [$dateS . " 00:00:00"]);
			} elseif (!empty($searchData['date_to'])) {
				$dateE = date("Y-m-d",strtotime($searchData['date_to']));
				$DB->where('users_kyc_details.created_at', '<=', [$dateE . " 00:00:00"]);
			}
			foreach ($searchData as $fieldName => $fieldValue) {
				if ($fieldValue != "") {
                    if ($fieldName == "mobile") {
                        $DB->where("users.mobile", 'like', '%' . $fieldValue . '%');
                    }
                    if ($fieldName == "vplay_id") {
                        $DB->where("users.vplay_id", 'like', '%' . $fieldValue . '%');
                    }
                    if ($fieldName == "order_id") {
                        $DB->where("users_kyc_details.order_id", 'like', '%' . $fieldValue . '%');
                    }
				}
				$searchVariable	=	array_merge($searchVariable, array($fieldName => $fieldValue));
			}
		}
		$DB->where('verify_status','0')
			->where('DOCUMENT_NAME','!=',null)
			->where('DOCUMENT_NUMBER','!=',null)
			->where('DOCUMENT_FIRST_NAME','!=',null)
			->where('DOCUMENT_LAST_NAME','!=',null)
			->where('DOCUMENT_DOB','!=',null)
			->where('DOCUMENT_STATE','!=',null)
			->where('DOCUMENT_FRONT_IMAGE','!=',null)
			->where('DOCUMENT_BACK_IMAGE','!=',null);
		$sortBy = ($request->input('sortBy')) ? $request->input('sortBy') : 'users_kyc_details.created_at';
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

    public function changeStatus($modelId = 0, $status = 0)
    {
        if ($status == 1) {
            $statusMessage   =   trans("Pending KYC has been Approved successfully");
        } else {
            $statusMessage   =   trans("Pending KYC has been Rejected successfully");
        }

        $KYC = UsersKycDetails::find(base64_decode($modelId));

        if ($KYC != '') {
            if($status == 1){
            	$KYC->verify_status = '1';
            }else{
            	$KYC->DOCUMENT_NAME = null;
				$KYC->DOCUMENT_NUMBER = null;
				$KYC->DOCUMENT_FIRST_NAME = null;
				$KYC->DOCUMENT_LAST_NAME = null;
				$KYC->DOCUMENT_DOB = null;
				$KYC->DOCUMENT_STATE = null;
				$KYC->DOCUMENT_FRONT_IMAGE = null;
				$KYC->DOCUMENT_BACK_IMAGE = null;
				$KYC->verify_status = null;
            }
            $KYC->save();
        }
        Session()->flash('flash_notice', $statusMessage);
        return back();
    }
}


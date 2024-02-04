<?php

namespace App\Http\Controllers\adminpnlx;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\Payments;
use App\Models\TransactionHistory;
use App\Models\User;
use Redirect,Session,Config;

class PaymentsController extends Controller
{
    public $model      =   'payments';
    public function __construct(Request $request)
    {   
        parent::__construct();
        View()->share('model', $this->model);
        $this->request = $request;
    }

    public function index(Request $request)
	{
		$DB					=	Payments::query();
		$DB->select('Payments.*','users.vplay_id','users.mobile')->join('users', 'users.id' ,"=","payments.user_id");
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
				$DB->whereBetween('payments.created_at', [$dateS . " 00:00:00", $dateE . " 23:59:59"]);
			} elseif (!empty($searchData['date_from'])) {
				$dateS = date("Y-m-d",strtotime($searchData['date_from']));
				$DB->where('payments.created_at', '>=', [$dateS . " 00:00:00"]);
			} elseif (!empty($searchData['date_to'])) {
				$dateE = date("Y-m-d",strtotime($searchData['date_to']));
				$DB->where('payments.created_at', '<=', [$dateE . " 00:00:00"]);
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
                        $DB->where("payments.order_id", 'like', '%' . $fieldValue . '%');
                    }
				}
				$searchVariable	=	array_merge($searchVariable, array($fieldName => $fieldValue));
			}
		}

		$sortBy = ($request->input('sortBy')) ? $request->input('sortBy') : 'payments.created_at';
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
            $statusMessage   =   trans("Withdraw Request has been Approved successfully");
        } else {
            $statusMessage   =   trans("Withdraw Request has been Rejected successfully");
        }

        $withdraw_requests = WithdrawRequests::find($modelId);

        if ($withdraw_requests != '') {
            $withdraw_requests->status = $status == 1 ? "success" : 'reject';
            $withdraw_requests->save();

            if($withdraw_requests->status == "reject"){
                $users          =   User::find($withdraw_requests->user_id);
                $users->wallet  =   $users->wallet+$withdraw_requests->amount;
                $users->save();
            }

            $trans                  = TransactionHistory::where('order_id', $withdraw_requests->id)->first();
            $trans->withdraw_status = $withdraw_requests->status;
            $trans->save();

        }
        Session()->flash('flash_notice', $statusMessage);
        return back();
    }

    public function show($paymentsIds = null)
    {
        $payment_id    =  base64_decode($paymentsIds);
        $Payments      =  Payments::join('users', 'users.id' ,"=","payments.user_id")->find($payment_id);
        if($Payments != '') {
            return  View("admin.$this->model.view",compact('Payments'));
        }else {
            return redirect()->route($this->model . ".index");
        }
    }
}


<?php

namespace App\Http\Controllers\adminpnlx;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Comissions;
use Redirect,Session,Config;

class AdminSettingsController extends Controller
{
    public $model      =   'admin-settings';

    public function index(Request $request){
    	$admin_setting     =  Comissions::first();
        if($request->isMethod('POST')) {
        	
            $admin_setting->battle_comission_with_referral     =  $request->battle_comission_with_referral;
            $admin_setting->battle_comission_without_referral  =  $request->battle_comission_without_referral;
            $admin_setting->refferal_comission                 =  $request->refferal_comission;
            $admin_setting->mode                               =  $request->mode;
            $admin_setting->save();
            
            Session()->flash('flash_notice',"Admin setting has been updated successfully");
            return back();
        } 
        return view("admin.$this->model.index",compact('admin_setting'));
    }
}
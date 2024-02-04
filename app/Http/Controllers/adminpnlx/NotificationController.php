<?php

namespace App\Http\Controllers\adminpnlx;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\MarqueeNotifications;
use Redirect,Session,Config;

class NotificationController extends Controller
{
    public $model      =   'notification';

    public function marqueeNotification(Request $request){

    	$notification     =  MarqueeNotifications::first();
        if($request->isMethod('POST')) {
            $validator    =   Validator::make($request->all(), 
                array(
                    'marquee_text'            => 'required',
                )
            );
            if($validator->fails()) {
    			return Redirect::back()->withErrors($validator)->withInput();
    		}else{

                $notification->notice_text     =  $request->notice_text ?? null;
                $notification->marquee_text    =  $request->marquee_text ?? null;
                $notification->status          =  $request->status ?? null;
                $notification->save();
                
                Session()->flash('flash_notice',"Marquee Notification has been added successfully");
                return back();
            }
        } 
        return view("admin.$this->model.index",compact('notification'));
    }
}
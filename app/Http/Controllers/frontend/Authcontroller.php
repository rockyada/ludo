<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProfileImageRequests;
use App\Models\Games;
use App\Models\User;
use Config;

class Authcontroller extends Controller
{

    public function index() {
    	if(Login()){
    		$games = Games::Status()->orderBy('id','DESC')->get();
    		return View("frontend.game.index",compact('games'));
    	}else{
    		return View("frontend.index");
    	}
    }

    public function profile() {
        return View("frontend.users.profile");
	}

    public function userProfileUpdate(Request $request) {
        $users          = User::find(Login()->id);
        $users->name    = $request->name ?? '';
        $users->save();
        return "success"; 
    }

    public function profileImageRequests(ProfileImageRequests $request) {
        $users          = User::find(Login()->id);
        if($request->hasfile('profile_image')){
            $extension         =    $request->file('profile_image')->getClientOriginalExtension();
            $fileName          =    time().'-image.'.$extension;
            $folderName        =    strtoupper(date('M'). date('Y'))."/";
            $folderPath        =    Config('constants.USER_IMAGE_ROOT_PATH').$folderName;
            $deletePath        =    Config('constants.USER_IMAGE_ROOT_PATH').$users->image ?? '';
            if(file_exists($deletePath)){
                unlink($deletePath);
            }
            if($request->file('profile_image')->move($folderPath, $fileName)){
                $users->image  = $folderName.$fileName;
            }
        }

        $users->save();
        return "success"; 
    }


	public function wallet(Request $request) {
        return View("frontend.users.wallet");
	}

	public function history(Request $request) {
        return View("frontend.users.history");
	}

	public function referEarn(Request $request) {
        return View("frontend.users.refer-earn");
	}

	public function support(Request $request) {
        return View("frontend.users.support");
	}

	public function lagalTerms(Request $request) {
        return View("frontend.users.lagal-terms");
	}


}

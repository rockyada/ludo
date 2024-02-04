<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BattleController extends Controller
{
    public function gamesListing() {
        return View("frontend.game.battle-listing");
    }

    public function battleViews() {
        return View("frontend.game.battle-view");
    }
}

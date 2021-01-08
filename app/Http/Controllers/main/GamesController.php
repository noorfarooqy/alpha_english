<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    //

    public function listGames(Request $request){

        return view('0.games.list_games.blade.php');
    }
}

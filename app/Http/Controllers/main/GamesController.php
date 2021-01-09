<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    //

    protected $games ;
    public function __construct()
    {
        $this->games =  [
            "happy_monster",
            "tracing"
        ];
    }

    public function listGames(Request $request){
        $games = $this->games;
        return view('0.games.list_games', compact('games'));
    }

    public function getGame(Request $request, $game){
        abort_if(!in_array($game, $this->games),404, 'Game is not in the demo');

        return view('0.games.'.$game);
    }

}

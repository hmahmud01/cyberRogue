<?php

namespace App\Http\Controllers;

use App\Rogue;
use App\Game;
use App\Friend;
use Illuminate\Http\Request;

use App\Http\Requests;

class RogueController extends Controller
{
    public function rogues()
    {
        $rogues = Rogue::all();
    	return view('pages.rogues', compact('rogues'));
    }

    public function games()
    {
        $games = Game::all();
    	return view('pages.games', compact('games'));
    }

    public function friends()
    {
        $friends = Friend::all();
    	return view('pages.friends', compact('friends'));
    }
}

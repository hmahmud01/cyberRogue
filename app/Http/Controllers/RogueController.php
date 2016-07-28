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

    public function showRogue(Rogue $rogue_data)
    {
        return view('show.rogue', compact('rogue_data'));
    }

    public function games()
    {
        $games = Game::all();
    	return view('pages.games', compact('games'));
    }

    public function showGame(Game $game_data)
    {
        return view('show.game', compact('game_data'));
    }

    public function friends()
    {
        $friends = Friend::all();
    	return view('pages.friends', compact('friends'));
    }

    public function showFriend(Friend $friend_data)
    {
        return view('show.friend', compact('friend_data'));
    }
}

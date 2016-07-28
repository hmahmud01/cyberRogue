<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rogue extends Model
{
    public function frineds()
    {
    	return $this->hasMany(Friend::class);
    }

    public function games()
    {
    	return $this->hasMany(Game::class);
    }

    public function path()
    {
    	return '/rogues/' . $this->id;
    }
}

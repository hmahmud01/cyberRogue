<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    public function rogue()
    {
    	return $this->belongsTo(Rogue::class);
    }
}

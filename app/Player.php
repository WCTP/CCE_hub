<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'game_name', 'full_name', 'team', 'major',
        'hometown', 'role', 'main', 'position',
    ];
}

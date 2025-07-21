<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArtMovement extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'start_year',
        'end_year',
        'description',
    ];

}

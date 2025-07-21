<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArtistImage extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'artist_id',
        'name',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArtistMovement extends Model
{
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'artist_id',
        'movement_id',
    ];


    public function artists()
    {
        return $this->belongsToMany(Artist::class, 'artist_movements', 'movement_id', 'artist_id');
    }



    public function movements()
    {
        return $this->belongsToMany(Movement::class, 'artist_movements', 'artist_id', 'movement_id');
    }

}

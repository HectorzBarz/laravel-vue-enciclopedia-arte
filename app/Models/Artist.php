<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'country',
        'description',
        'start',
        'end',
        'img',
    ];

    public function movements()
    {
        return $this->belongsToMany(Movement::class, 'artist_movement');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function artPieces()
    {
        return $this->belongsToMany(ArtPiece::class, 'artist_art_piece');
    }


}

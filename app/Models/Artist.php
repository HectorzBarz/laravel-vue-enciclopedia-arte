<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{

    public $timestamps = false;
    protected $fillable = [
        'title',
        'country',
        'description',
        'start',
        'end',
        'img',
    ];

    public function movements()
    {
        return $this->belongsToMany(Movement::class, 'artist_movements');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function artPieces()
    {
        return $this->belongsToMany(ArtPiece::class, 'art_piece_artist');
    }



}

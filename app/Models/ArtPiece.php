<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArtPiece extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'title',
        'description',
        'date',
        'img',
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'art_piece_tag');
    }

    public function movement()
    {
        return $this->belongsToMany(Movement::class, 'movement_art_piece');
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function artists()
    {
        return $this->belongsToMany(Artist::class, 'art_piece_artist');
    }




}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArtPiece extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'artist_id',
        'title',
        'description',
        'date',
        'img',
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'art_piece_tag');
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function artists()
    {
        return $this->belongsToMany(Artist::class, 'artist_art_piece');
    }


}

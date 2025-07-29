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

}

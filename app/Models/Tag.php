<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
    ];

    public function artPieces()
    {
        return $this->belongsToMany(ArtPiece::class, 'art_piece_tag');
    }


}

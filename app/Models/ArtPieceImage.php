<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArtPieceImage extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'art_piece_id',
        'name',
    ];
}

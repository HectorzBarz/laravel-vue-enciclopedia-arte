<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movement extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'description',
        'start',
        'end',
        'img',
    ];

    public function artists()
    {
        return $this->belongsToMany(Artist::class, 'artist_movement');
    }


}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movement extends Model
{
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'title',
        'description',
        'start',
        'end',
        'img',
    ];

    public function artists()
    {
        return $this->belongsToMany(Artist::class, 'artist_movements');
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }


}

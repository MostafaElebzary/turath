<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Knowus extends Model
{
    protected $fillable = [
        'text'
    ];


    public function images()
    {
        return $this->hasMany(KnowusImage::class);
    }
}

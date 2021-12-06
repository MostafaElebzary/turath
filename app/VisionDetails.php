<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VisionDetails extends Model
{
    protected $fillable = [
        'vision_id','text'
    ];

    public function Vision()
    {
        return $this->belongsTo(Vision::class, 'vision_id');
    }

}

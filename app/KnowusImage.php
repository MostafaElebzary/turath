<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KnowusImage extends Model
{

    protected $fillable = [
        'image','knowus_id'
    ];

    public function KnowUs()
    {
        return $this->belongsTo(Knowus::class, 'knowus_id');
    }


    public function getImageAttribute($image)
    {
        if (!empty($image)) {
            return asset('uploads/sliders') . '/' . $image;
        }
        return "";
    }

    public function setImageAttribute($image)
    {
        if (is_file($image)) {
            $imageFields = upload($image, 'sliders');
            $this->attributes['image'] = $imageFields;
        }
    }
}

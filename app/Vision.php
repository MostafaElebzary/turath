<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vision extends Model
{
    protected $fillable = [
        'image','title'
    ];

    public function visionDetails()
    {
        return $this->hasMany(VisionDetails::class);
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

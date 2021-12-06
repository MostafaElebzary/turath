<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = [
        'title','image','description'
    ];

    public function getImageAttribute($image)
    {
        if (!empty($image)) {
            return asset('uploads/pdfs') . '/' . $image;
        }
        return "";
    }

    public function setImageAttribute($image)
    {
        if (is_file($image)) {
            $imageFields = upload($image, 'pdfs');
            $this->attributes['image'] = $imageFields;
        }
    }
}

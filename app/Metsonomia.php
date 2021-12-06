<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Metsonomia extends Model
{
    protected $fillable =
        [
            'image', 'name', 'text', 'job'
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

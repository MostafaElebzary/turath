<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pdf extends Model
{
    protected $fillable = [
        'title','pdf','type'
    ];

    public function getPdfAttribute($image)
    {
        if (!empty($image)) {
            return asset('uploads/pdfs') . '/' . $image;
        }
        return "";
    }

    public function setPdfAttribute($image)
    {
        if (is_file($image)) {
            $imageFields = upload($image, 'pdfs');
            $this->attributes['pdf'] = $imageFields;
        }
    }
}

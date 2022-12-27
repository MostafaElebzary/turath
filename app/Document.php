<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $guarded = [''];

    public function getImageAttribute($image)
    {
        if (!empty($image)) {
            return asset('uploads/documents') . '/' . $image;
        }
        return asset('default.png');
    }

    public function setImageAttribute($image)
    {
        if (is_file($image)) {
            $img_name = time() . random_int(0000, 9999) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/uploads/documents/'), $img_name);
            $this->attributes['image'] = $img_name;
            $this->attributes['type'] = $image->getClientOriginalExtension();
        } else {
            $this->attributes['image'] = $image;
        }
    }
}

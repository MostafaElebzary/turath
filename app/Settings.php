<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $fillable = [
        "title","facebook","instagram","twitter","linkedin","logo","phone","email",
        "website","address","lat","lng","chart_image","board_directors_pdf"
    ];


    public function getBoardDirectorsPdfAttribute($image)
    {
        if (!empty($image)) {
            return asset('uploads/settings') . '/' . $image;
        }
        return "";
    }

    public function setBoardDirectorsPdfAttribute($image)
    {
        if (is_file($image)) {
            $imageFields = upload($image, 'settings');
            $this->attributes['board_directors_pdf'] = $imageFields;
        }
    }

    public function getChartImageAttribute($image)
    {
        if (!empty($image)) {
            return asset('uploads/settings') . '/' . $image;
        }
        return "";
    }

    public function setChartImageAttribute($image)
    {
        if (is_file($image)) {
            $imageFields = upload($image, 'settings');
            $this->attributes['chart_image'] = $imageFields;
        }
    }

    public function getLogoAttribute($image)
    {
        if (!empty($image)) {
            return asset('uploads/settings') . '/' . $image;
        }
        return "";
    }

    public function setLogoAttribute($image)
    {
        if (is_file($image)) {
            $imageFields = upload($image, 'settings');
            $this->attributes['logo'] = $imageFields;
        }
    }

}

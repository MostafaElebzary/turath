<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
  protected $fillable = [
      'subject','name','phone','email','msg','type'
  ];
}

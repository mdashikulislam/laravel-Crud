<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [
        'title','desc','institution','fstudy','numofsch','target','value','eligibility','instructions','website'
    ];
}

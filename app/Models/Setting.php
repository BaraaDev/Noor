<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Setting extends Model implements HasMedia
{
    use InteractsWithMedia, SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['name','keyword','content','location'
        ,'phone','whatsApp','facebook','twitter','linkedin','youtube','instagram','telegram','email'];
}

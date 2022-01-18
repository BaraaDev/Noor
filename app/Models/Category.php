<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Category extends Model implements HasMedia
{
    use InteractsWithMedia, SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['name','user_id','status'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getPhotoAttribute()
    {
        return $this->getFirstMediaUrl('images');
    }

    public function scopeStatus($query,$arg){
        return $query->where('status' , $arg);
    }
}

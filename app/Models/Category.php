<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;

class Category extends Model
{
    use InteractsWithMedia;
    protected $dates = ['deleted_at'];
    protected $fillable = ['name','user_id','status'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function scopeStatus($query,$arg){
        return $query->where('status' , $arg);
    }
}

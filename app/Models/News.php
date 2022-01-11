<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class News extends Model implements HasMedia
{
    use InteractsWithMedia, SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['title','content','user_id','status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getPhotoAttribute()
    {
        return $this->getFirstMediaUrl('images','image');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('image')
            ->width(810)
            ->height(540);
    }

    public function scopeStatus($query,$arg){
        return $query->where('status' , $arg);
    }
}

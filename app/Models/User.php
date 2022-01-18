<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class User extends Authenticatable implements HasMedia
{
    use InteractsWithMedia, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','password','location','phone','job','facebook','twitter','youtube','instagram','status','is_admin',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function getPhotoAttribute()
    {
        if ($this->getFirstMediaUrl('images','image')) {
            return $this->getFirstMediaUrl('images','image');
        } else {
            return asset('users/avatar.jpg');
        }
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

    public function scopeIsAdmin($query,$arg){
        return $query->where('is_admin' , $arg);
    }
}

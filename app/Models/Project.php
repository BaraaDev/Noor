<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['title','user_id','status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeStatus($query,$arg){
        return $query->where('status' , $arg);
    }
}

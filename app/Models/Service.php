<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['name','description','icon','status','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function scopeStatus($query,$arg){
        return $query->where('status' , $arg);
    }
}

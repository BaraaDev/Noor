<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Setting extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['name','keyword','content','location'
        ,'phone','whatsApp','facebook','twitter','linkedin','youtube','instagram','telegram','email','status'];


    public function scopeStatus($query,$arg){
        return $query->where('status' , $arg);
    }
}

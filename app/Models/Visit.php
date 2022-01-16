<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    protected $table = 'visit_site';
    public $timestamps = true;

    protected $fillable = ['session_id','user_id','ip','agent'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

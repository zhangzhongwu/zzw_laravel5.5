<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
	//用来自定可以更新的字段
	protected $fillable = ['content']; 

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}

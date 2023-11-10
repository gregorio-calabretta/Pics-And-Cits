<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{

    

    protected $fillable = [
        'post_id',
        'user_id'
    ];



public function user(){
    return $this->belongsTo("App\User","user_id","id");
}
public function post(){
    return $this->belongsTo("App\Post","post_id","id");
}

}

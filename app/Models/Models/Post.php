<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  //  protected $table ="posts";
    

    protected $fillable = [
        'user_id',
        'tipo',
        'data',
        'cit',
        'url_img'
    ];

protected $hidden =[
'user_id'
];

public function user(){
    return $this->belongsTo("App\User","user_id","id");
}

public function likes(){
    return $this->hasMany("App\Like","user_id","user_id");
}

}

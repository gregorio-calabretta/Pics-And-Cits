<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follower extends Model
{
    
    
        protected $fillable = [
            'follows_id',
            'followed_id'
            
        ];
    
    
    
        public function follows(){
            return $this->belongsTo("App/User","follows_id","id");
        }
        public function followed(){
            return $this->belongsTo("App/User","followed_id","id");
        }
    
    }
    
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'user_id', 'city', 'about'
    ];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}

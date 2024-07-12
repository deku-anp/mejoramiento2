<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collaborator extends Model
{
    use HasFactory;

    public function pay()
    { 
        return $this->hasMany('App\Models\Pay'); 
    }

    public function projects()//nombre va en plural por que es de muchos a muchos
    
    //esta relacion es de muchos a muchos 
    {
        return $this->belongsToMany('App\Models\Project'); 
    }
}

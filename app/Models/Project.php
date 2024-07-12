<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function client()
    { 
        return $this->belongsTo('App\Models\Client'); 
    }

    public function collaborators()//nombre va en plural por que es de muchos a muchos
    
    //esta relacion es de muchos a muchos 
    {
        return $this->belongsToMany('App\Models\Collaborator'); 
    }

}

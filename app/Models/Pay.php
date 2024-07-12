<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pay extends Model
{
    use HasFactory;

    public function typePay()
    { 
        return $this->hasMany('App\Models\TypePay'); 
    }

    public function collaborator()
    { 
        return $this->belongsTo('App\Models\Collaborator'); 
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRisque extends Model
{
    use HasFactory;

    public function userRisqueDones()
    {
        return $this->hasMany(UserRisqueDone::class);
    }
    Public function risque(){
        return $this->belongsTo('App\Models\Risque');
    }
}

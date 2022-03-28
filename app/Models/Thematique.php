<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thematique extends Model
{
    use HasFactory;

    public function risques(){
        return $this->belongsToMany('App\Risque')->withTimeStamps();
    }
}

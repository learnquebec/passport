<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Risque extends Model
{
    use HasFactory;

    Public function categorie(){
        return $this->belongsTo('App\Models\Categorie');
    }

    public function thematiques(){
        return $this->belongsToMany('App\Models\Thematique')->withTimeStamps();
    }
}

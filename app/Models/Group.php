<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    public function Users()
    {
        return $this->belongsToMany("App\Models\User", "user_group")->withTimestamps();
    }
    public function Defis()
    {
        return $this->hasMany("App\Models\DefiGroup");
    }

}

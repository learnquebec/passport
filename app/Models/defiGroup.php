<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/* put a capital here */

class DefiGroup extends Model
{
    use HasFactory;

    public function Groups()
    {
        return $this->belongTo("App\Models\Groups");
    }
}


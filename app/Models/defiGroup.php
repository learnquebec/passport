<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DefiGroup extends Model
{
    use HasFactory;

    public function Groups()
    {
        return $this->belongTo("App\Models\Groups");
    }
}

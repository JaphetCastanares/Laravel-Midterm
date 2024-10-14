<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    use HasFactory;

    // Define the participants relationship
    public function participants()
    {
        return $this->hasMany(Participant::class);
    }
}

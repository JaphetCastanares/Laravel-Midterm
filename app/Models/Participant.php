<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;

    // Add all the fields that you want to be mass assignable
    protected $fillable = [
        'first_name', 
        'last_name', 
        'course', 
        'year', 
        'sport_id'
    ];

    // Define relationships if needed (e.g., Participant belongs to a Sport)
    public function sport()
    {
        return $this->belongsTo(Sport::class);
    }
    public function participants()
{
    return $this->hasMany(Participant::class);
}

}

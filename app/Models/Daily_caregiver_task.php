<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daily_caregiver_task extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['Caregiver_ID', "Patient_ID", 'Date', "Morning_Med", "Afternoon_Med", "Night_Med", 'Breakfast', 'Lunch', "Dinner"];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['Doctor_ID', "Patient_ID", 'Date', 'Comment', "Morning_Med", "Afternoon_Med", "Night_Med"];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $fillable = ["Date", "Doctor_ID", "Supervisor_ID", "Caregiver1", "Caregiver2", "Caregiver3", "Caregiver4"];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caregiver_patient_group extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ["Schedule_ID", "Caregiver_ID", 'Group_ID'];
}

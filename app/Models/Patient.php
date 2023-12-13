<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Patient extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    public $timestamps = false;
    protected $fillable = ["Patient_ID", "First_Name", "Last_Name", "Email", "Phone", "Password", "Role_ID", "dob", "Patient_Group", "Admission_Date", "Family_Code", "User_ID"];
    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'Doctor_id'); // Replace 'doctor_id' with the actual foreign key column
    }
    public function caregiver()
    {
        return $this->belongsTo(Caregiver::class, 'Caregiver_id'); // Replace 'doctor_id' with the actual foreign key column
    }
}

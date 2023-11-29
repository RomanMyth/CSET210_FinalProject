<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Registration extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    public $timestamps = false;
    protected $fillable = ['Role_ID', 'First_Name', 'Last_Name', 'Email', 'Phone', 'Password', 'dob', 'Family_Code', 'Emergency_Contact', 'Contact_Relation'];
}

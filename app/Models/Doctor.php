<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Doctor extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    public $timestamp = false;
    protected $fillable = ["Doctor_Id","First_Name",'Last_Name','Email','Password','Role_ID', 'Salary' ];
}

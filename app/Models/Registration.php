<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'Role_ID',
        'First_Name',
        'Last_Name',
        'Email',
        'Phone',
        'Password',
        'DOB',
        'Family_Code',
        'Emergency_Contact',
        'Emergency_Contact_Relation',
    ];
}

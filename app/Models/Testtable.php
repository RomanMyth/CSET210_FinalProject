<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testtable extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable=['column1','column2'];
}

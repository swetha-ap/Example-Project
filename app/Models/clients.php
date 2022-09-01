<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clients extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    // public $fillable=['firstname','lastname','email','password']; 
    // public $timestamps=false;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name',
        'address',
        'job_title',
        'age',
        'email',
        'phone_number'
     ];
    use HasFactory;
}

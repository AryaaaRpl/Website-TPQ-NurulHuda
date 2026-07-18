<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $fillable = ['registration_number', 'name', 'parent_name', 'phone', 'age', 'program', 'status'];
}

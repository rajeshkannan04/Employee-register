<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee_table extends Model
{
    use HasFactory;
    protected $table = 'employees';
    protected $fillable = ['name','gender','DOB','address','mobile','email','department_id','designation_id','DOJ','image'];
}

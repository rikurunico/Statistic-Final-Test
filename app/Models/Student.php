<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public $table = 'student_tables';

    protected $fillable = [
        'NIM',
        'name',
        'score',
    ];
}

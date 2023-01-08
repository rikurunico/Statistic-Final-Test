<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Student extends Model
{
    use HasFactory, Sortable;

    protected $table = 'students';

    public $primaryKey = 'id';

    protected $fillable = [
        'NIM',
        'name',
        'score',
    ];

    public $sortable  = [
        'NIM',
        'name',
        'score',
    ];
}

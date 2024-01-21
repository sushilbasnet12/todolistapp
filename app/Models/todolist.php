<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class todolist extends Model
{
    use HasFactory;
    protected $table =['todolists'];

    protected $primary_key = 'id';

    protected $fillable = ["name", "work", "dueDate"];

    
}

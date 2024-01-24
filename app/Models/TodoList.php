<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoList extends Model
{
    use HasFactory;

    protected $primary_key = 'id';

    protected $fillable = ["name", "work", "due_date"];

    protected $table = 'todo_lists';

    
}

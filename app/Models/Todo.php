<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    // Specify the table if it doesn't follow Laravel's naming convention
    protected $table = 'todos';

    // Specify the fillable fields to allow mass assignment
    protected $fillable = [
        'title',
        'description',
        'due_date',
        'completed'
    ];
}
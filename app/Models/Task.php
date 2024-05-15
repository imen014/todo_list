<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'task_title',
        'task_content',
        'task_state',
        'start_date',
        'start_time',
        'end_date',
        'end_time'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

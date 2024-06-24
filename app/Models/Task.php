<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $table ='tasks';

    protected $fillable = ['title', 'description', 'long_description'];

    public function toggleComplete()
    {
        $this->completed = !$this->completed;
        $this->save();
    }

    public function getCompletedLabelAttribute()
    {
        return $this->completed ? 'yes' : 'no';
    }

}


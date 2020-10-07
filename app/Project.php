<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function tasks()
    {
        return $this->hasMany(Task::class)->orderBy('order');
    }

    public function overdueTasks()
    {
        return $this->hasMany(Task::class)->whereDate('deadline', '<', date("Y-m-d"));
    }
}

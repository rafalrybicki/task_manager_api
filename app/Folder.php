<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    public function projects()
    {
        return $this->hasMany(Project::class)->orderBy('order');
    }
}

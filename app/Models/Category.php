<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function article()
    {
        return $this->belongsToMany('App\Models\Article')->select('title')->where('status',1);
    }
}

<?php

namespace Appslanka\ForumFlex\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Appslanka\ForumFlex\Models\Thread;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
       'name',
       'description'
    ];

    public function threads()
    {
        return $this->hasMany(Thread::class);
    }
}
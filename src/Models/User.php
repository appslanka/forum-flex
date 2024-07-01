<?php

namespace Appslanka\ForumFlex\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Appslanka\ForumFlex\Models\Thread;
use Appslanka\ForumFlex\Models\Post;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'email_verified_at',
    ];

    public function threads()
    {
        return $this->hasMany(Thread::class);
    }
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

}
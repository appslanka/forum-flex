<?php

namespace Appslanka\ForumFlex\Models;

use Appslanka\ForumFlex\Models\User;
use Appslanka\ForumFlex\Models\Thread;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
      protected $table = 'forum_flex_posts';
    use HasFactory;
    protected $fillable = [
        'body',
        'thread_id',
        'content',
    ];
    public function thread()
    {
        return $this->belongsTo(Thread::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

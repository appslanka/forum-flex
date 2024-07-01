<?php

namespace Appslanka\ForumFlex\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Appslanka\ForumFlex\ForumFlex
 */
class ForumFlex extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Appslanka\ForumFlex\ForumFlex::class;
    }
}

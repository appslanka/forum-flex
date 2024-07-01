<?php

namespace Appslanka\ForumFlex;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Appslanka\ForumFlex\Commands\ForumFlexCommand;

class ForumFlexServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('forum-flex')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_forum-flex_table')
            ->hasCommand(ForumFlexCommand::class);
    }
}

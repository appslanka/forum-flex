<?php

namespace Appslanka\ForumFlex\Commands;

use Illuminate\Console\Command;

class ForumFlexCommand extends Command
{
    public $signature = 'forum-flex';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}

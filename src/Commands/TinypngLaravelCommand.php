<?php

namespace DigitalCoreHub\TinypngLaravel\Commands;

use Illuminate\Console\Command;

class TinypngLaravelCommand extends Command
{
    public $signature = 'tinypng-laravel';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}

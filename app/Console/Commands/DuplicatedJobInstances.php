<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use \App\Jobs\ExampleJob;

class DuplicatedJobInstances extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'job:duplicated-job-instances';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        ExampleJob::dispatch();
    }
}

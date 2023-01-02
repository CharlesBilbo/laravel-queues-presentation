<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\Queue;
use \App\Jobs\ExampleJob;

class ShowDispatch extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'job:dispatch';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
    // Bus::disptach(new ExampleJob);
    // dispatch(new ExampleJob);
    // ExampleJob::dispatch();
    $this->blocking();
    }

    /**
     * Many calls to redis
     */
    protected function blocking()
    {
        for($i = 0; $i < 10; $i++) {
           ExampleJob::dispatch();
        }
    }

    /**
     * Single Call to redis
     */
    protected function optimized()
    {
        $jobs = [];

        for($i = 0; $i < 10; $i++) {
            $jobs[] = new ExampleJob;
        }

        Queue::bulk($jobs);
    }
}

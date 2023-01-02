<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Queue;

class PushQueue extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'job:push';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return Queue::push(fn () => print('hello world'));
    }
}

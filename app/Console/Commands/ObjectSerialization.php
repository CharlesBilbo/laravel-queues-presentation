<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use \App\Jobs\ExampleJob;

class ObjectSerialization extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'job:object-serialization';

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

    public string $message = 'hello world';

    public function handle()
    {

        dispatch(fn() => print($this->message));

        $message = $this->message;

        // dispatch(function () use($message) {
        //      print($message) . PHP_EOL;
        // });

    }
}

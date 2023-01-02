<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use \App\Jobs\SerializationFileJob;

class PayloadSerialization extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'job:payload-serialization';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Storage::disk('local')->put('example.txt', "Hello world");

        $stream = Storage::disk('local')->readStream('example.txt');

        SerializationFileJob::dispatch($stream);
    }
}

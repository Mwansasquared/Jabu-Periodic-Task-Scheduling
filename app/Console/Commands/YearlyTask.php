<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class YearlyTask extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'yearlyTask:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run task on 5th March each year';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return 0;
    }
}

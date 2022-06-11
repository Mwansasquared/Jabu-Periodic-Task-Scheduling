<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DailyTask extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dailyTask:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run task daily at 10:00am';

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

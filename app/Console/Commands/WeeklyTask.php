<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class WeeklyTask extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'weeklyTask:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run task weekly on Mondays, Wednesdays, and Fridays';

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

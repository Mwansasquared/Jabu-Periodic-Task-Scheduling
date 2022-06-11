<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MonthlyTask extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'monthlyTask:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run task monthly on the 5th';

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

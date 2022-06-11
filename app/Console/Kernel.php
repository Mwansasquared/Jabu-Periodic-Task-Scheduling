<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {   
        //run task every minute
        $schedule->command('periodicTask:cron')->everyMinute();

        //run task everyday at 10:00
        $schedule->command('dailyTask:cron')->dailyAt('10:00');

        //run task weekly on Monday,Wednesday and Friday at 10:00
        $schedule->command('weeklyTask:cron')
                ->weekly('10:00')
                ->days([1,3,5]);
        
        //run task 5th of every month
        $schedule->command('monthlyTask:cron')->monthlyOn(5,'10:00');

        //run task every year on 5th March
        $schedule->command('yearlyTask:cron')->yearlyOn(5,3,'10:00');
    }

    protected $commands = [Commands\periodicTask::class];

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}

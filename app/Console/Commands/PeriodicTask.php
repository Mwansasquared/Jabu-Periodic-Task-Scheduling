<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PeriodicTask extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'periodTask:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return void
     */

    public function _construct() {

        parent::__construct();
    }

    public function handle()
    {
        info("Cron Job running at ". now());

        $response = Http::get('https://jsonplaceholder.typicode.com/users');

        $users = $response->json();

        if(!empty($users)) {
            foreach($users as $key => $user) {
                if(!User::where('email', $user['e,ail'])->exists()) {
                    User::create([
                        'name' => $user['name'],
                        'email' => $user['email'],
                        'password' => bcrypt('123456789')
                    ]);
                }
            }
        }

        
        return 0;
    }
}

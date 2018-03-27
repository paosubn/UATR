<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();

       $schedule->call(function () {
       DB::table('preregistros')->where('created_at', '<', 'timestamp(DATE_SUB( NOW() , INTERVAL 24 HOUR' )->delete();
       })->everyMinute();


       $schedule->call(function () {
        DB::table('preregistros')->where('created_at', '<', 'timestamp(DATE_SUB( NOW() , INTERVAL 72 HOUR' )->delete();
        })->everyMinute();
 
        /*
        CREATE EVENT EventoCancelacion24
ON SCHEDULE  EVERY 1 MINUTE  STARTS '2018-03-08 10:47:00'
DO 
update preregistros 
set statusCancelacion = 24 
WHERE statusCancelacion = 0 and 
created_at < timestamp(DATE_SUB( NOW() , INTERVAL 24 HOUR ) );



CREATE EVENT EventoCancelacion72
ON SCHEDULE  EVERY 1 MINUTE  STARTS '2018-03-08 10:47:00'
DO 
update preregistros 
set statusCancelacion = 24 
WHERE statusCancelacion = 1 and 
updated_at < timestamp(DATE_SUB( NOW() , INTERVAL 72 HOUR ) );


        */






    

         //  $schedule->call(function () {
            //   DB::table()
              // })->daily();

    }

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

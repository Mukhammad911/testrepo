<?php
namespace Teleglobal\Videowork\Console;

use App\Console\Kernel as ConsoleKernel;
use Illuminate\Console\Scheduling\Schedule;

class Kernel extends ConsoleKernel
{
    protected $commands = [

        \Teleglobal\Videowork\Console\Commands\Testshedule::class,

    ];
    protected function schedule(Schedule $schedule)
    {
        parent::schedule($schedule);
        $schedule->command('testshedule')->everyMinute();
        //
    }
}
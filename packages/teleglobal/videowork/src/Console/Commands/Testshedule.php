<?php

namespace Teleglobal\Videowork\Console\Testshedule;

//use DB;
use Illuminate\Console\Command;
//use App\Models\Drop;

class Testshedule extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'testshedule';

    /**
     * The console command description.
     *
     * @var string
     */

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        echo 'testShedule';
    }
}

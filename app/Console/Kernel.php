<<<<<<< HEAD
<?php

namespace App\Console;

use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected $commands = [];

    protected function schedule(\Illuminate\Console\Scheduling\Schedule $schedule)
    {
        // Define scheduled commands here.
    }

    protected function commands()
    {
        $this->load(__DIR__.'/Commands');
    }
}
=======
<?php

namespace App\Console;

use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected $commands = [];

    protected function schedule(\Illuminate\Console\Scheduling\Schedule $schedule)
    {
        // Define scheduled commands here.
    }

    protected function commands()
    {
        $this->load(__DIR__.'/Commands');
    }
}
>>>>>>> bc60b796583544d0723aed639250b1377c2fca05

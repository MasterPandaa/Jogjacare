<?php

namespace Modules\MedicalCenter\Console\Commands;

use Illuminate\Console\Command;

class MedicalCenterCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:MedicalCenterCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'MedicalCenter Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return Command::SUCCESS;
    }
}

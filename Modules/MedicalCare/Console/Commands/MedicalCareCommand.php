<?php

namespace Modules\MedicalCare\Console\Commands;

use Illuminate\Console\Command;

class MedicalCareCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:MedicalCareCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'MedicalCare Command description';

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

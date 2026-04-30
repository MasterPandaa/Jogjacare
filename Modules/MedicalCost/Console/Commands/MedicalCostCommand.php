<?php

namespace Modules\MedicalCost\Console\Commands;

use Illuminate\Console\Command;

class MedicalCostCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:MedicalCostCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'MedicalCost Command description';

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

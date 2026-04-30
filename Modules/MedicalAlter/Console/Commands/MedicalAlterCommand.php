<?php

namespace Modules\MedicalAlter\Console\Commands;

use Illuminate\Console\Command;

class MedicalAlterCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:MedicalAlterCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'MedicalAlter Command description';

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

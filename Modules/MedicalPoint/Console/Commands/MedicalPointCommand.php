<?php

namespace Modules\MedicalPoint\Console\Commands;

use Illuminate\Console\Command;

class MedicalPointCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:MedicalPointCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'MedicalPoint Command description';

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

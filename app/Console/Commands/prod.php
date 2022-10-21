<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class prod extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:prod';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Setting up the production environment.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Setting up the environment:');

        if (file_exists('env_prod')) {
            rename('.env', 'env_local');
            rename('env_prod', '.env');
            return $this->info('Setting up production development sucees!🥳');
        }
        $this->warn("You're already in production environment mode.");
    }
}

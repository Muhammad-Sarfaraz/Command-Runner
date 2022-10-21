<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class local extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:local';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Setting up the local environment.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Setting up the environment:');

        if (file_exists('env_local')) {
            rename('.env', 'env_prod');
            rename('env_local', '.env');
            return $this->info('Setting up local development sucees!');
        }
        $this->warn("You're already in local environment mode.");
    }
}

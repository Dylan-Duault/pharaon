<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RefreshAndSeedDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'database:refresh-and-seed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Refresh the database and run all seeders';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Starting database refresh and seed...');
        
        try {
            $this->call('migrate:fresh', ['--seed' => true]);
            $this->info('Database has been refreshed and seeded successfully!');
            return 0;
        } catch (\Exception $e) {
            $this->error('An error occurred: ' . $e->getMessage());
            return 1;
        }
    }
}

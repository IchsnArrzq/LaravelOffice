<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class RoleUserPermission extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:role';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command For Access Admin';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        User::find(1)->assignRole('admin');
        return Command::SUCCESS;
    }
}

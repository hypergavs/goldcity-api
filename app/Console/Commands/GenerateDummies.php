<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GenerateDummies extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:dummies';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return mixed
     */
    public function handle()
    {
        \factory(\Goldcity\Models\User::class, 1)->create();
        \factory(\Goldcity\Models\Role::class, 1)->create();
    }
}

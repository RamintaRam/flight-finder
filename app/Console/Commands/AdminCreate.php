<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;


class AdminCreate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to create Administrator';

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
        $this->comment('Creating Administrator');

        $record = User::create(
            [
                'name' => $name = $this->ask('Please provide admins name'),
                'email'=> $email = $this->ask('Please provide admins email address'),
                'password' => bcrypt($password = $this->secret('Please provide admin login password'))
            ]);

        User::create($record);
        $this->comment('Administrator created!');

    }
}

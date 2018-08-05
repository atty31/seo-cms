<?php

use Illuminate\Database\Seeder;

/**
 * Class DatabaseSeeder
 * @author Attila Naghi <naghi.attila@mail.com>
 */
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call('DefaultSettingsSeeder');
        $this->call('StaticBlocksSeeder');
        //this message shown in your terminal after running db:seed command
        $this->command->info('Default settings were added');
    }
}
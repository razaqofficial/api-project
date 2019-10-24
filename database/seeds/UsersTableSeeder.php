<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'Dummy User',
            'email' => 'dummy123@example.com',
            'password' => bcrypt('dummy123'),
        ]);
    }
}

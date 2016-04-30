<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);
        $user = new App\User();
        $user->name = 'Puping';
        $user->email = 'puping@gmail.com';
        $user->password = Hash::make('987654');
        $user->save();
    }
}

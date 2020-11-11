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
        for($i = 0; $i < 10; $i++)
        {
            DB::table('users')->insert([
                'lname' => random_int(10, 100),
                'fname' => random_int(10, 100),
                'phone' => rand(80000000000, 89999999999),
                'email' => random_int(10, 100).'@gmail.com',
                'password' => bcrypt('secret'),
            ]);
        }
    }
}

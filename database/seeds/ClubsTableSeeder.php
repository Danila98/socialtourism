<?php

use Illuminate\Database\Seeder;

class ClubsTableSeeder extends Seeder
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
            DB::table('clubs')->insert([
                'user_id' => $i,
                'company_name' => random_int(10, 100),
                'club_name' => random_int(10, 100),
                'description' => random_int(10, 100),
                'participants_number' => rand(1, 50),
            ]);
        }

    }
}

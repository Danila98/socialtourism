<?php

use Illuminate\Database\Seeder;

class WorksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 20; $i++)
        {
            DB::table('competitive_works')->insert([
                'user_id' => rand(1, 10),
                'club_id' => rand(1, 10),

            ]);
        }
    }
}

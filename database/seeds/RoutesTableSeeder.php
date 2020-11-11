<?php

use Illuminate\Database\Seeder;

class RoutesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 25; $i++)
        {
            DB::table('tourist_routes')->insert([
                'club_id' => rand(0, 9),
                'time' => date("Y-m-d H:i:s"),
            ]);
        }
    }
}

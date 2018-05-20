<?php

use Illuminate\Database\Seeder;

class DashboardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        	['name' => 'Ankur','department'=>'Civil Services','salary' => 200000],
        	['name' => 'Animesh','department'=>'Developer+Designer','salary' => 204300],
        	['name' => 'Tapas','department'=>'Electronics','salary' => 2002120],
        ];
        DB::table('dashboards')->insert($data);
    }
}

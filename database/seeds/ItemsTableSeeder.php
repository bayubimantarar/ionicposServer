<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$date = Carbon::now();
        DB::table('items')->insert([['item_code' => 'FK001', 'item_name' => 'Rexona', 'price' => 2000, 'created_at' => $date], ['item_code' => 'FK002', 'item_name' => 'Clear Men', 'price' => 500, 'created_at' => $date]]);
    }
}

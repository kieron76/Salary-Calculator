<?php

use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// populate the staff table
        DB::table('Staff')->insert([
                'first_name' => 'Bob',
                'last_name' => 'Smith',
                'salary' => 50000,
        ]);

	DB::table('Staff')->insert([
		'first_name' => 'Jane',
		'last_name' => 'Barber',
		'salary' => 60000,
	]);

	DB::table('Staff')->insert([
		'first_name' => 'Julie',
		'last_name' => 'Walter',
		'salary' => 30000,
	]);
	    
    }
}

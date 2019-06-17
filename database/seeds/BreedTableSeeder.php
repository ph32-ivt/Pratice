<?php

use Illuminate\Database\Seeder;
use App\Breed;

class BreedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Breed::class, 5)->create();
        $data = [
        	[
        		'name' => 'Breed1',
        		'created_at' => now(),
        		'updated_at' => now()
        	],
        	[
        		'name' => 'Breed2',
        		'created_at' => now(),
        		'updated_at' => now()
        	],
        	[
        		'name' => 'Breed3',
        		'created_at' => now(),
        		'updated_at' => now()
        	],

        ];
        Breed::insert($data);

    }
}

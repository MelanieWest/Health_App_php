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
            $faker = Faker\Factory::create();
    
            $limit = 10;
    
            for ($i = 0; $i < $limit; $i++) {
                DB::table('users')->insert([ //,
                    'id' => $faker ->id,
                    'name' => $faker->name,
                    'password' => $faker->unique(),
                    'email'=> $faker->unique()->email,
                    'created_at'=>$faker->date 
                ]);
            }
            for ($i = 0; $i < $limit; $i++) {
                DB::table('meds')->insert([ //,
                    'id' => $faker ->id,
                    'name' => $faker->name,
                    'created_at'=>$faker->date,
                    'dose'=>$faker->integer,
                    'rem'=>$faker->integer
                ]);
            }

            for ($i = 0; $i < $limit; $i++) {
                DB::table('health')->insert([ //,
                    'id' => $faker ->id,
                    'user_id' => $faker->id,
                    'glucose' => $faker->integer,
                    'created_at'=>$faker->date 
                ]);
            }



    }

}

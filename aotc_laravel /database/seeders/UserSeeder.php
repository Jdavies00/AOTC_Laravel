<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(50)->create();
    }
}


    
    // may not need thsi changing over to using modle factories
    //Of course, manually specifying the attributes for each model seed is cumbersome. Instead, you can use model factories to conveniently generate large amounts of database records. First, review the model factory documentation to learn how to define your factories.
    //php artisan db:seed --class=UserSeeder

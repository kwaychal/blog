<?php

use App\Blog;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;



class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Kiran Waychal',
            'email' => 'knwaychal@gmail.com',
            'phone' => '9833101606',
            'city' => 'Kalyan',
            'state' => 'Maharashtra',
            'referred_by' => null,
            'referral_code' => uniqid(),
            'password' => Hash::make('123456'),
            'role' => 'admin'
        ]);

        $faker = new Faker();
        
        for ($i=0; $i < 10; $i++) { 
            User::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'phone' => rand(1111111111,9999999999),
                'city' => $faker->city,
                'state' => $faker->state,
                'referred_by' => null,
                'referral_code' => uniqid(),
                'password' => Hash::make('123456')
            ]);
        }

        for ($i=0; $i < 20; $i++) { 
            Blog::create([
                'title' => $faker->title,
                'user_id' => rand(1,10),
                'description' => $faker->text($maxNbChars = 1000),
                'image' => 'https://dummyimage.com/600x400/000/fff'
            ]);
        }
    }
}

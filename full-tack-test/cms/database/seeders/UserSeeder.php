<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Ravindu Thaveesha',
            'email' => 'ravindu@email.com',
            'password' => Hash::make('password'),
            'biography' => 'A solution-driven software engineer and data scientist with a diverse range of experience across industries such as aviation, e-commerce, property management, and video streaming. My expertise includes web and mobile development, cloud and serverless computing, big data, machine learning, and more. I am a critical thinker who enjoys solving complex problems, and I am meticulous and pay close attention to detail. I am always eager to take on new challenges and push myself to improve, and I find great satisfaction in developing solutions that benefit others.',
            'facebook' => 'https://www.facebook.com/Thaveesha.ravindu2',
            'twitter' => 'https://twitter.com/',
            'linkedin' => 'https://www.linkedin.com/in/ravindu-thaveesha/',
            'instagram' => 'https://www.instagram.com/',
        ]);
    }
}

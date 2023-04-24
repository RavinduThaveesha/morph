<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DriveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'Project Planner Use Case',
                'Deep Dive',
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque in ligula hendrerit, rhoncus felis id, mollis massa. Fusce tincidunt ultricies consectetur.',
                '1h20 min'
            ],
            [
                'Define Project Hierarchies with Sub-Projects',
                'Get Started',
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque in ligula hendrerit, rhoncus felis id, mollis massa. Fusce tincidunt ultricies consectetur.',
                '10 min'
            ],
            [
                'Optimize Task Execution',
                'Learning Module',
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque in ligula hendrerit, rhoncus felis id, mollis massa. Fusce tincidunt ultricies consectetur. ',
                '30 min'
            ],
            [
                'Monitor and Access Project Status',
                'Learning Module',
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque in ligula hendrerit, rhoncus felis id, mollis massa. Fusce tincidunt ultricies consectetur.',
                '30 min'
            ],
        ];

        foreach ($data as $item) {
            DB::table('drives')->insert([
                'title' => $item[0],
                'sub_title' => $item[1],
                'description' => $item[2],
                'time' => $item[3],
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FundamentalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'What is the Project Planner Role' => '',
            'Introducing the Project Planing App' => ' <h3 class="text-center mt-4">Introducing to Project Planing App</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pretium massa in ex tincidunt,
              vestibulum sodales lectus vestibulum. Cras ut lacus tristique, ultrices elit sit amet, luctus odio.
            </p>
            <ul>
              <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pretium massa in ex tincidunt,
                vestibulum sodales lectus vestibulum.</li>
              <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
              <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pretium massa in ex tincidunt.
              </li>
              <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit Quisque pr.</li>
              <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit tuisque pretium massa in ex tincidunt.
              </li>
              <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pretium massa in ex tincidunt,
                vestibulum sodales lectus vestibulum.</li>
            </ul>',
            'Introducing the Collaborative Task App' => ''
        ];

        foreach ($data as $key => $item) {
            DB::table('fundamentals')->insert([
                'name' => $key,
                'content' => $item
            ]);
        }
    }
}

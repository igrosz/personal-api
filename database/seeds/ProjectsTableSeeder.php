<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            ['title' => 'personal_api',
             'description' => 'An api to generate my personal info',
             'start_date'  => '5/16/2018'
            ],
            ['title' => 'pair_project',
            'description' => 'A project made together with a partner',
            'start_date'  => '5/30/2018'
           ],
         ]);
    }
}

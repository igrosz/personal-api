<?php

use Illuminate\Database\Seeder;

class InstitutionsTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('institutions')->insert([
            
            ['title' => 'BMG',
            'diplomas' => 'bachelors in Talmudic studies, masters in Rabinical and Talmudic studies',
        ],
        ['title' => 'PCS',
        'diplomas' => 'html,css,js,php',
        ],
       ]);
    }    
        
    
}

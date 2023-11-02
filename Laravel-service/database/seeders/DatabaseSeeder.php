<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();
        Listing::factory(6)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        /*
        Listing::create([
            'title' => 'Laravel Senior Developer',
            'tags' => 'laravel, javascript',
            'company' => 'Acme Corp',
            'location' => 'Boston Ma',
            'email' => 'email1@email.com',
            'website' => 'http://www.acme.com',
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
            Eum corporis fuga, soluta eius quis inventore, minima eligendi culpa iusto 
            incidunt quam aliquid fugit animi sint! Magni eum blanditiis fugiat reiciendis?'
        ]);

        Listing::create([
            'title' => 'Full-tack Engenire',
            'tags' => 'laravel, backend, api',
            'company' => 'Start industries',
            'location' => 'New York, NY',
            'email' => 'email2@email.com',
            'website' => 'http://www.starkindustries.com',
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
            Eum corporis fuga, soluta eius quis inventore, minima eligendi culpa iusto 
            incidunt quam aliquid fugit animi sint! Magni eum blanditiis fugiat reiciendis?'
        ]);
        */

    }
}

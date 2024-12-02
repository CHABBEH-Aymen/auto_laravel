<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'abdel',
            'email' => 'abdel@gmail.com',
            'password' => '123456789'
        ]);
        DB::table('articles')->insert(
            [
                [
                'title' =>'Les bases de Laravel',
                'content' => 'Introduction au framework Laravel, ses avantages et comment commencer avec une application simple',
                'created_at' => now(), 
                'updated_at' => now(),
                ],
                [
                'title' =>'10 astuces pour apprendre Kotlin',
                'content' => 'Découvrez des techniques simples et efficaces pour apprendre le langage Kotlin rapidement',
                'created_at' => now(),
                'updated_at' => now(),
                ],
                [
                'title' =>'Créer une API RESTful avec Laravel 11',
                'content' => 'Guide étape par étape pour construire une API RESTful en utilisant Laravel 11, avec des exemples pratiques',
                'created_at' => now(),
                'updated_at' => now(),
                ],
                [
                'title' =>'Introduction à la méthode SCRUM',
                'content' => 'Explication des principes fondamentaux de la méthode SCRUM et son utilisation dans la gestion de projet agile',
                'created_at' => now(),
                'updated_at' => now(),
                ],
                [
                'title' =>'Comment optimiser votre code en Kotlin',
                'content' => 'Conseils pour écrire du code plus propre et performant en Kotlin',
                'created_at' => now(),
                'updated_at' => now(),
                ],
            ]
        );
    }
}

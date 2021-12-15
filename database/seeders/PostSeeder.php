<?php

namespace Database\Seeders;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'title' => 'Teste de Postagem 1',
            'content' => 'Testando a Lista de Postagem 1'
        ]);

        Post::create([
            'title' => 'Teste de Postagem 2',
            'content' => 'Testando a Lista de Postagem 2'
        ]);

        Post::create([
            'title' => 'Teste de Postagem 3',
            'content' => 'Testando a Lista de Postagem 3'
        ]);



    }
}

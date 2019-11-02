<?php

use App\Post;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $etiquetas = explode(',', "Nintendo,Play Station,Xbox");

        factory(Post::class, 300)->create()->each(function (Post $post){
        	$post->tag()->attach($etiquetas);
        });
    }
}

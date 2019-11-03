<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $titulo = $faker->sentence(4);

    return [
        'titulo' => $titulo,
        'slug' => Str::slug($titulo),
        'contenido' => $faker->text(500),
        'extracto' => $faker->text(100),
        'estado' => $faker->randomElement(['DRAFT', 'PUBLISHED']),
        'user_create_id' => rand(1, 30),
        'user_modified_id' => rand(1, 30),
        'ruta_imagen' => $faker->imageUrl($width = 1200, $height = 400),
    ];
});

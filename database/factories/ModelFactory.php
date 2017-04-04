<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});



$factory->define(App\Usuario::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'nombre' => $faker->name,
        'apellido' => $faker->lastName  ,
        'email' => $faker->unique()->safeEmail,
        'telefono' => $faker->PhoneNumber,
        'tipo_documento_id' => $faker->numberBetween($min = 1, $max = 3),
        'tipo_usuario_id' => $faker->numberBetween($min = 1, $max = 2),
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'created_at' => date('Y-m-d H:m:s'),
        'updated_at' => date('Y-m-d H:m:s'),
    ];



});

/*crear productos*/
$factory->define(App\Pelicula::class, function (Faker\Generator $faker) {


    return [
        'nombre' => $faker->name,
        'url_imagen' => $faker->imageUrl('160', '240'),
        'sinopsis' => $faker->text($maxNbChars = 150),
        'genero_id' => $faker->numberBetween($min = 1, $max = 9),

    ];



});

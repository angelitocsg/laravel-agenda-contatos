<?php

use Faker\Generator as Faker;

$factory->define(App\Contato::class, function (Faker $faker) {
    return [
        'saudacao' => $faker->title(),
        'nome' => $faker->name,
        'telefone' => $faker->cellphoneNumber,
        'data_nascimento' => $faker->date('d-m-Y'),
        'email' => $faker->unique()->safeEmail,
        'nota' => 'Usuário criado usando método factory e classe Faker.'
    ];
});

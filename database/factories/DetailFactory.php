<?php

use Faker\Generator as Faker;

$factory->define(App\Detail::class, function (Faker $faker) {
    return [
        //
        'question_body'=> $faker->paragraph($nbSentences =3, $variableNbSentences =true),
        'answer_body'=> $faker->paragraph($nbSentences =3, $variableNbSentences =true)
    ];
});

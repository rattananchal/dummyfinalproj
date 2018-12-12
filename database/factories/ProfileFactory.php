<?php

use Faker\Generator as Faker;
use App\Profile;

$factory->define(App\Profile::class, function (Faker $faker) {
    return [
        //
        'fname' => $faker -> firstName,
        'lname'=> $faker -> lastName,
        'about_you'=> $faker -> paragraph ( $nbSentence = 3, $variableNbSentence = true )
    ];
});

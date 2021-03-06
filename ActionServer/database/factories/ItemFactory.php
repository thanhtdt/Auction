<?php

$factory->define(\App\Entities\Item::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->sentence,
        'description' => $faker->text,
        'image' => $faker->imageUrl(500, 500, 'cats'),
        'ending_time' => $faker->dateTimeThisMonth($max = 'now + 3days'),
        'starting_price' => $faker->numberBetween(1, 1000) * 1000,
        'user_id' => $faker->numberBetween(1, config('factory.USER_AMOUNT'))

    ];
});

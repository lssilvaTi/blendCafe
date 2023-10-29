<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Brackets\AdminAuth\Models\AdminUser::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'password' => bcrypt($faker->password),
        'remember_token' => null,
        'activated' => true,
        'forbidden' => $faker->boolean(),
        'language' => 'en',
        'deleted_at' => null,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        'last_login_at' => $faker->dateTime,
        
    ];
});/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Stock::class, static function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
        'location' => $faker->sentence,
        'is_active' => $faker->boolean(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\CoffeeGrain::class, static function (Faker\Generator $faker) {
    return [
        'lote' => $faker->sentence,
        'nf' => $faker->sentence,
        'slip' => $faker->randomNumber(5),
        'qtd' => $faker->randomNumber(5),
        'prod' => $faker->sentence,
        'safra' => $faker->sentence,
        'bebida' => $faker->sentence,
        'cheiro' => $faker->sentence,
        'aspecto' => $faker->sentence,
        'mofo' => $faker->randomFloat,
        'def' => $faker->randomNumber(5),
        'umid' => $faker->randomFloat,
        'imp' => $faker->randomFloat,
        'broca' => $faker->randomFloat,
        'num18' => $faker->randomFloat,
        'num17' => $faker->randomFloat,
        'num16' => $faker->randomFloat,
        'num15' => $faker->randomFloat,
        'num14' => $faker->randomFloat,
        'num13' => $faker->randomFloat,
        'num12' => $faker->randomFloat,
        'num10_11' => $faker->randomFloat,
        'numfundo_b' => $faker->randomFloat,
        'stock_id' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});

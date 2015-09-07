<?php
/**
 * @var $faker \Faker\Generator
 * @var $index integer
 */
return [
    'email' => $faker->email,
    'password_hash' => Yii::$app->security->generatePasswordHash('password_' . $index),
    'auth_key' => Yii::$app->security->generateRandomString(),
    'name' => $faker->firstName . ' ' . $faker->lastName,
    'birthday' => $faker->date(),
    'created_at' => $faker->unixTime,
    'updated_at' => $faker->unixTime,
];

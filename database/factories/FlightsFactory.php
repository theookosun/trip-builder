<?php

use Faker\Generator as Faker;

$factory->define(App\Airport::class, function (Faker $faker) {
    return [
        'airport_name'=> $faker->name,
        'iata_code' => str_random(3),
        'country' => $faker->country,
        'state' => $faker->stateAbbr
    ];
});

$factory->define(App\Flights::class, function (Faker $faker) {
    $flightHours = $faker->numberBetween(1, 5);
    $flightTime = new DateInterval('PT'. $flightHours . 'H');
    $arrival = $faker->dateTime;
    $depart = clone $arrival;
    $depart->sub($flightTime);
    return [
        'flight_number' => str_random(3) . $faker->unique()->randomNumber(5),
        'departureAirport_id' => $faker->numberBetween(1, 5),
        'arrivalAirport_id' => $faker->numberBetween(1, 5),
        'departure_time' => $depart,
        'arrival_time' => $arrival,
        ];
    });
    $factory->define(App\Customer::class, function (Faker $faker) {
        return [
            'firstName' => $faker->firstName,
            'lastName' => $faker->lastName
        ]; 

    });
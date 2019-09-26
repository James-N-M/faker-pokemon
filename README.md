<p align="center">
    <img src="https://user-images.githubusercontent.com/9950778/34909614-eab4956c-f8a4-11e7-974e-067cd19f6803.png" />
    <br /><br />
    <a href="https://github.com/fzaninotto/Faker" target="_blank">Faker</a> extension for Pokemon Fans.
</p>

## Installation

```php
composer require 
```

## Basic usage

### Laravel Factory
```php

$factory->define(User::class, function (Faker $faker) {

    $faker->addProvider(new \Faker\Provider\FakerPokemon($faker));

    return [
        ...
    ];

$faker->pokemonName;            // Pikachu
$faker->pokemonCharacterName;   // Ash Ketchum
$faker->pokemonType;            // Fire
$faker->pokemonLocation;        // Pallet Town
$faker->pokemonMove;            // Quick Attack
$faker->pokemonQuote('oak')     // Your very own tale of grand adventure is about to unfold
$faker->pokeball()              // Safari Ball

```
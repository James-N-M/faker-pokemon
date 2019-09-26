<p align="center">
    <img src="https://user-images.githubusercontent.com/6562688/65653704-2fdc1200-dfe4-11e9-908f-6ccfba3bedb2.png" />
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

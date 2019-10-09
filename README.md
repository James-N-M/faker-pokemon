<p align="center">
    <img height="234" width="300" src="https://user-images.githubusercontent.com/6562688/65653705-3074a880-dfe4-11e9-8cfe-d2c62112587e.jpg" />
    <br /><br />
    <a href="https://github.com/fzaninotto/Faker" target="_blank">Faker</a> extension for Pokemon Fans.
</p>

## Installation

```php
composer require james-n-m/faker-pokemon
```

## Basic usage

### Laravel Factory
```php

$factory->define(UserPokemon::class, function (Faker $faker) {

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
$faker->item()                  // Rare Candy
$faker->keyItem()               // Pokedex 

```

To then use this factory within a seeder file. First, create a seeder file:

```
php artisan make:seeder PokemonTableSeeder
```

Open the seeder file and add the following. Use the factory that we created above for the `App\UserPokemon` model:

```php
<?php

use Illuminate\Database\Seeder;

class PokemonTableSeeder extends Seeder
{
    public $create_count = 5;
    
    public function run()
    {
        factory(App\UserPokemon::class, $this->create_count)->create();
    }
}
```

Finally, run the seeder:

```
php artisan db:seed --class=PokemonTableSeeder
```

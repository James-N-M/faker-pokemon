<?php

namespace Faker\Tests\Provider;

require '../../vendor/autoload.php';

use Faker\Factory;
use Faker\Generator;
use Faker\Provider\FakerPokemon;
use PHPUnit\Framework\TestCase;

class FakerPokemonTest extends TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    public function setUp(): void
    {
        $faker = Factory::create();
        $faker->addProvider(new FakerPokemon($faker));
        $this->faker = $faker;
    }

    public function testPokemonName()
    {
        $this->faker->seed(random_int(1, 9999));

        $pokemonName = $this->faker->pokemonName();

        $this->assertNotEmpty($pokemonName);
    }

    public function testPokemonCharacterName()
    {
        $this->faker->seed(random_int(1, 9999));

        $characterName = $this->faker->pokemonCharacterName();

        $this->assertNotEmpty($characterName);
    }

    public function testPokemonType()
    {
        $this->faker->seed(random_int(1, 9999));

        $type = $this->faker->pokemonType();

        $this->assertNotEmpty($type);
    }

    public function testPokemonLocation()
    {
        $this->faker->seed(random_int(1, 9999));

        $location = $this->faker->pokemonLocation();

        $this->assertNotEmpty($location);
    }

    public function testPokemonMove()
    {
        $this->faker->seed(random_int(1, 9999));

        $move = $this->faker->pokemonMove();

        $this->assertNotEmpty($move);
    }

    public function testPokemonQuote()
    {
        $this->faker->seed(random_int(1, 9999));

        $quote = $this->faker->pokemonQuote('pikachu');

        $this->assertNotEmpty($quote);
    }

    public function testPokeball()
    {
        $this->faker->seed(random_int(1, 9999));

        $pokeball = $this->faker->pokeball();

        $this->assertNotEmpty($pokeball);
    }

    public function testItem()
    {
        $this->faker->seed(random_int(1, 9999));

        $item = $this->faker->item();

        $this->assertNotEmpty($item);
    }

    public function testKeyItem()
    {
        $this->faker->seed(random_int(1, 9999));

        $item = $this->faker->keyItem();

        $this->assertNotEmpty($item);
    }
}

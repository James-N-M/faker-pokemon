<?php

namespace Faker\Tests\Provider;

require '../../vendor/autoload.php';

use Faker\Factory;
use Faker\Generator;
use Faker\Provider\PokemonData;
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

    public function testTest()
    {
        $this->assertEquals("Hello", "Hello");
    }

    public function testPokemonName()
    {
        $this->faker->seed(random_int(1, 9999));

        $pokemonName = $this->faker->pokemonName();

        $this->assertNotEmpty($pokemonName);
    }


}
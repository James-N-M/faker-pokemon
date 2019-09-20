<?php

namespace Faker\Tests\Provider;

use Faker\Factory;
use Faker\Generator;
use Faker\Provider\FakerPokemon;
use Faker\Provider\PokemonData;
use PHPUnit\Framework\TestCase;

class FakerPokemonTest extends TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    public function setUp() : void
    {
        $faker = Factory::create();
        $faker->addProvider(new FakerPokemon($faker));
        $this->faker = $faker;
    }

    public function testPokemon()
    {
        $this->assertEquals("Pikachu", $this->faker->pokemon());
    }
}
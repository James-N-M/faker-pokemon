<?php

namespace Faker\Provider;

use Faker\Generator;

class FakerPokemon extends Base
{
    /**
     * FakerPokemon constructor.
     *
     * @param \Faker\Generator $generator
     */
    public function __construct(Generator $generator)
    {
        parent::__construct($generator);
    }

    /**
     * Get Pokemon string
     *
     * @return string
     */
    public static function pokemon() : string
    {
        return "Pikachu";
    }
}
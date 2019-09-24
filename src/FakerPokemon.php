<?php

namespace Faker\Provider;

use Faker\Generator;

class FakerPokemon extends \Faker\Provider\Base
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
        // Create a pokemon object in memory
        // build up the object and return it
        // json_encode it so its comes out pretty
        return 'pokemon_place_holder';
    }

    /**
     * Get random pokemon name
     */
    public static function pokemonName(): string
    {
        return (string) static::randomElement(PokemonData::getPokemonNames());
    }

    /**
     * Get random pokemon character name
     */
    public static function pokemonCharacterName(): string
    {
        return (string) static::randomElement(PokemonData::getCharacterNames());
    }

    /**
     * Get random pokemon type
     *
     * @return string
     */
    public static function pokemonType() : string
    {
        return (string) static::randomElement(PokemonData::getPokemonTypes());
    }

    /**
     * Get random pokemon location
     */
    public static function pokemonLocation(): string
    {
        return (string) static::randomElement(PokemonData::getPokemonLocations());
    }

    /**
     * Get random pokemon move
     */
    public static function pokemonMove(): string
    {
        return (string) static::randomElement(PokemonData::getPokemonMoves());
    }
}
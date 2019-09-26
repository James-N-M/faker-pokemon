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
     * Get Pokemon object
     *
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
     * @return string
     */
    public static function pokemonName(): string
    {
        return (string) static::randomElement(PokemonData::getPokemonNames());
    }

    /**
     * Get random pokemon character name
     * @return string
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
     * @return string
     */
    public static function pokemonLocation(): string
    {
        return (string) static::randomElement(PokemonData::getPokemonLocations());
    }

    /**
     * Get random pokemon move
     * @return string
     */
    public static function pokemonMove(): string
    {
        return (string) static::randomElement(PokemonData::getPokemonMoves());
    }

    /**
     * @param string|null $character
     * @return null|string
     */
    public function pokemonQuote(string $character = null)
    {
        if (null === $character) {
            return $this->generator->parse(static::randomElement($this->flatten(PokemonData::getQuotes())));
        }
        if (array_key_exists($character, PokemonData::getQuotes())) {
            $quotes = PokemonData::getQuotes();
            return $this->generator->parse(static::randomElement($quotes[$character]));
        }
        return null;
    }

    /**
     * Get random pokeball
     * @return string
     */
    public static function pokeball(): string
    {
        return (string) static::randomElement(PokemonData::getPokeBalls());
    }

    /**
     * @param array $array
     * @return array
     */
    protected function flatten(array $array): array
    {
        $result = [];
        foreach ($array as $item) {
            if (false == is_array($item)) {
                $result[] = $item;
            } else {
                $result = array_merge($result, array_values($item));
            }
        }
        return $result;
    }

    // badges

}
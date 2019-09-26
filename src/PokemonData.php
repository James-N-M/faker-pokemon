<?php

namespace Faker\Provider;

class PokemonData
{
    public static function getPokemonNames() : array
    {
        return static::$pokemonNames;
    }

    public static function getPokemonTypes() : array
    {
        return static::$pokemonTypes;
    }

    public static function getPokemonLocations() : array
    {
        return static::$pokemonLocations;
    }

    public static function getPokemonMoves(): array
    {
        return static::$pokemonMoves;
    }

    public static function getCharacterNames() : array
    {
        return static::$characterNames;
    }

    public static function getPokeBalls() : array
    {
        return static::$pokeballs;
    }

    public static function getQuotes() : array
    {
        return static::$quotes;
    }

	protected static $pokemonNames = ['Bulbasaur', 'Ivysaur', 'Venusaur', 'Charmander', 'Charmeleon', 'Charizard',
        'Squirtle', 'Wartortle', 'Blastoise', 'Caterpie', 'Metapod', 'Butterfree', 'Weedle', 'Kakuna', 'Beedrill', 'Pidgey',
        'Pidgeotto', 'Pidgeot', 'Rattata', 'Raticate', 'Spearow', 'Fearow', 'Ekans', 'Arbok', 'Pikachu', 'Raichu',
        'Sandshrew', 'Sandslash', 'Nidorina', 'Nidoqueen', 'Nidorino', 'Nidoking', 'Clefairy', 'Clefable', 'Vulpix',
        'Ninetales', 'Jigglypuff', 'Wigglytuff', 'Zubat', 'Golbat', 'Oddish', 'Gloom', 'Vileplume', 'Paras', 'Parasect',
        'Venonat', 'Venomoth', 'Diglett', 'Dugtrio', 'Meowth', 'Persian', 'Psyduck', 'Golduck', 'Mankey', 'Primeape', 'Growlithe',
        'Arcanine', 'Poliwag', 'Poliwhirl', 'Poliwrath', 'Abra', 'Kadabra', 'Alakazam', 'Machop', 'Machoke', 'Machamp',
        'Bellsprout', 'Weepinbell', 'Victreebel', 'Tentacool', 'Tentacruel', 'Geodude', 'Graveler', 'Golem', 'Ponyta',
        'Rapidash', 'Slowpoke', 'Slowbro', 'Magnemite', 'Magneton', 'Farfetch\'d', 'Doduo', 'Dodrio', 'Seel', 'Dewgong',
        'Grimer', 'Muk', 'Shellder', 'Cloyster', 'Gastly', 'Haunter', 'Gengar', 'Onix', 'Drowzee', 'Hypno', 'Krabby',
        'Kingler', 'Voltorb', 'Electrode', 'Exeggcute', 'Exeggutor', 'Cubone', 'Marowak', 'Hitmonlee', 'Hitmonchan',
        'Lickitung', 'Koffing', 'Weezing', 'Rhyhorn', 'Rhydon', 'Chansey', 'Tangela', 'Kangaskhan', 'Horsea', 'Seadra',
        'Goldeen', 'Seaking', 'Staryu', 'Starmie', 'Mime', 'Scyther', 'Jynx', 'Electabuzz', 'Magmar', 'Pinsir', 'Tauros',
        'Magikarp', 'Gyarados', 'Lapras', 'Ditto', 'Eevee', 'Vaporeon', 'Jolteon', 'Flareon', 'Porygon', 'Omanyte',
        'Omastar', 'Kabuto', 'Kabutops', 'Aerodactyl', 'Snorlax', 'Articuno', 'Zapdos', 'Moltres', 'Dratini', 'Dragonair',
        'Dragonite', 'Mewtwo', 'Mew',
    ];

    protected static $characterNames = ['Ash Ketchum','Gary Oak', 'Professor Oak', 'Brock', 'Misty'];

	protected static $pokemonTypes = [
	  'Normal', 'Fire', 'Water', 'Electric', 'Grass', 'Ice', 'Fighting', 'Poison', 'Ground', 'Flying', 'Psychic',
        'Bug', 'Rock', 'Ghost', 'Dragon',
    ];

	protected static $pokemonMoves = [
        'Absorb', 'Acid', 'Acid Armor', 'Agility', 'Amnesia', 'Aurora Beam', 'Barrage',
        'Barrier', 'Bide', 'Bind', 'Bite', 'Blizzard', 'Body Slam', 'Bone Club', 'Bonemerang',
        'Bubble', 'Bubble Beam', 'Clamp', 'Comet Punch', 'Confuse Ray', 'Confusion', 'Constrict',
        'Conversion', 'Counter', 'Crabhammer', 'Cut', 'Defense Curl', 'Dig', 'Disable', 'Dizzy Punch',
        'Double Kick', 'Double Slap', 'Double Team', 'Double Edge', 'Dragon Rage', 'Dream Eater',
        'Drill Peck', 'Earthquake', 'Egg Bomb', 'Ember', 'Explosion', 'Fire Blast', 'Fire Punch',
        'Fire Spin', 'Fissure', 'Flamethrower', 'Flash', 'Fly', 'Focus Energy', 'Fury Attack',
        'Fury Swipes', 'Glare', 'Growl', 'Growth', 'Guillotine', 'Gust', 'Harden', 'Haze', 'Headbutt',
        'High Jump Kick', 'Horn Attack', 'Horn Drill', 'Hydro Pump', 'Hyper Beam', 'Hyper Fang',
        'Hypnosis', 'Ice Beam', 'Ice Punch', 'Jump Kick', 'Karate Chop', 'Kinesis', 'Leech Life',
        'Leech Seed', 'Leer', 'Lick', 'Light Screen', 'Lonely Kiss', 'Low Kick', 'Meditate', 'Mega Drain',
        'Mega Kick', 'Mega Punch', 'Metronome', 'Mimic', 'Minimize', 'Mirror Move', 'Mist', 'Night Shade',
        'Pay Day', 'Peck', 'Petal Dance', 'Pin Missile', 'Poison Gas', 'Poison Powder', 'Poison Sting',
        'Pound', 'Psybeam', 'Psychic', 'Psywave', 'Quick Attack', 'Rage', 'Razor Leaf', 'Razor Wind',
        'Recover', 'Reflect', 'Rest', 'Roar', 'Rock Slide', 'Rock Throw', 'Rolling Kick', 'Sand Attack',
        'Scratch', 'Screech', 'Seismic Toss', 'Self Destruct', 'Sharpen', 'Sing', 'Skull Bash', 'Attack',
        'Slam', 'Slash', 'Sleep Powder', 'Sludge', 'Smog', 'Smokescreen', 'Soft Boiled', 'Solar Beam',
        'Sonic Boom', 'Spike Cannon', 'Splash', 'Spore', 'Stomp', 'Strength', 'String Shot', 'Struggle',
        'Stun Spore', 'Submission', 'Substitute', 'Super Fang', 'Supersonic', 'Surf', 'Swift',
        'Swords Dance', 'Tackle', 'Tail Whip', 'Take Down', 'Teleport', 'Thrash', 'Thunder', 'Thunder Punch',
        'Thunder Shock', 'Thunder Wave', 'Thunderbolt', 'Toxic', 'Transform', 'Tri Attack', 'Twineedle',
        'Vice Grip', 'Vine Whip', 'Water Gun', 'Waterfall', 'Whirlwind', 'Wing Attack', 'Withdraw', 'Wrap',
    ];

	protected static $pokemonLocations = [
	  'Kanto', 'Celadon City', 'Celadon Condominiums', 'Celadon Department Store', 'Celadon Game Corner',
        'Cerulean Cave', 'Cerulean City', 'Cinnabar Island', 'Cinnabar Lab', 'Digletts Cave', 'Fighting Dojo',
        'Fuchsia City', 'HomeTown', 'Indigo Plateau', 'Kanto Power Plant', 'Kanto Safari Zone', 'Lavender Town',
        'Mt. Moon', 'Pallet Town', 'Pewter City', 'Pewter Museum of Science', 'Players house',
        'Pokémon League Reception Gate', 'Pokémon Mansion (Kanto)', 'Pokémon Tower', 'Professor Oaks Laboratory',
        'Rock Tunnel', 'S.S. Anne', 'Saffron City', 'Sea Cottage', 'Seafoam Islands', 'Silph Co.',
        'Team Rocket Hideout', 'Underground Path', 'Underground Path', 'Vermilion City', 'Victory Road (Kanto)',
        'Viridian City', 'Viridian Forest',
    ];

    protected static $quotes = [
        'pikachu' => [
            'piiiikkkkaaaaa chuuuuuuuuuuuuuuuuuuuuu',
            'pika pika',
            'pika'
        ],
        'oak' => [
            '...ERM, Whats was his name now?',
            'Your very own tale of grand adventure is about to unfold',
            'Smell you later!',
            'The bond you share with your pokemon is marvelous!'
        ],
        'ash' => [
            'Im Ash, from the town of Pallet',
            'Im destined to be the worlds number one Pokemon Master',
            'The professor sure has a lot of Muk on his hands'
        ]
    ];

    protected static $pokeballs = [
        'Pokeball', 'Great Ball', 'Ultra Ball', 'Master Ball', 'Safari Ball'
    ];

}

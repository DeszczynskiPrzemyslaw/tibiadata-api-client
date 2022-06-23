<?php

namespace TibiaDataApi;

use TibiaDataApi\Contents\Characters;
use TibiaDataApi\Contents\Creature;
use TibiaDataApi\Contents\Creatures;
use TibiaDataApi\Contents\Error;
use TibiaDataApi\Contents\Fansites;
use TibiaDataApi\Contents\Guilds;
use TibiaDataApi\Contents\Highscores;
use TibiaDataApi\Contents\House;
use TibiaDataApi\Contents\Houses;
use TibiaDataApi\Contents\Killstatistics;
use TibiaDataApi\Contents\News;
use TibiaDataApi\Contents\Spells;
use TibiaDataApi\Contents\Worlds;

interface TibiaDataApiInterface
{
    /**
     * Show all information about one character available
     * @see https://dev.tibiadata.com/v3/character/{name}
     *
     * @param string $name
     *
     * @return Characters|Error
     */
    public function character(string $name): Characters|Error;

    /**
     * Show all information about one creature
     * @see https://dev.tibiadata.com/v3/creature/{race}
     *
     * @param string $race
     *
     * @return Creature|Error
     */
    public function creature(string $race): Creature|Error;

    /**
     * Show all creatures listed
     * @see https://dev.tibiadata.com/v3/creatures
     *
     * @return Creatures|Error
     */
    public function creatures(): Creatures|Error;

    /**
     * List of all promoted and supported fansites
     * @see https://dev.tibiadata.com/v3/fansites
     *
     * @return Fansites|Error
     */
    public function fansites(): Fansites|Error;

    /**
     * Show all information about one guild
     * @see https://dev.tibiadata.com/v3/guild/{name}
     *
     * @param string $name
     *
     * @return Guilds|Error
     */
    public function guild(string $name): Guilds|Error;

    /**
     * Show all guilds on a certain world
     * @see https://dev.tibiadata.com/v3/guilds/{world}
     *
     * @param string $world
     *
     * @return Guilds|Error
     */
    public function guilds(string $world): Guilds|Error;

    /**
     * Show all highscores of tibia
     * @see https://dev.tibiadata.com/v3/highscores/{world}/{category}/{vocation}
     *
     * @param string $world
     * @param string $category
     * @param string $vocation
     *
     * @return Highscores|Error
     */
    public function highscores(string $world, string $category, string $vocation): Highscores|Error;

    /**
     * Show all information about one house
     * @see https://dev.tibiadata.com/v3/house/{world}/{house_id}
     *
     * @param string $world
     * @param int $houseId
     *
     * @return House|Error
     */
    public function house(string $world, int $houseId): House|Error;

    /**
     * Show all houses filtered on world and town
     * @see https://dev.tibiadata.com/v3/houses/{world}/{town}
     *
     * @param string $world
     * @param string $town
     *
     * @return Houses|Error
     */
    public function houses(string $world, string $town): Houses|Error;

    /**
     * Show all killstatistics filtered on world
     * @see https://dev.tibiadata.com/v3/killstatistics/{world}
     *
     * @param string $world
     *
     * @return Killstatistics|Error
     */
    public function killStatistics(string $world): Killstatistics|Error;

    /**
     * Show news archive with a filtering on 90 days
     * @see https://dev.tibiadata.com/v3/news/archive
     *
     * @return News|Error
     */
    public function newsArchive(): News|Error;

    /**
     * Show news archive with a filtering option on days
     * @see https://dev.tibiadata.com/v3/news/archive/{name}
     *
     * @param int $days
     *
     * @return News|Error
     */
    public function newsArchiveWithDaysFilter(int $days): News|Error;

    /**
     * Show one news entry
     * @see https://dev.tibiadata.com/v3/news/id/{news_id}
     *
     * @param int $news_id
     *
     * @return News|Error
     */
    public function newsId(int $news_id): News|Error;

    /**
     * Show newslist with filtering on articles and news of last 90 days
     * @see https://dev.tibiadata.com/v3/news/latest
     *
     * @return News|Error
     */
    public function newsLatest(): News|Error;

    /**
     * Show news of type news tickers of last 90 days
     * @see https://dev.tibiadata.com/v3/news/newsticker
     *
     * @return News|Error
     */
    public function newsNewsticker(): News|Error;

    /**
     * Show all information about one spell
     * @see https://dev.tibiadata.com/v3/spell/{spell_id}
     *
     * @param string $spell_id
     *
     * @return Spells|Error
     */
    public function spell(string $spell_id): Spells|Error;

    /**
     * Show all spells
     * @see https://dev.tibiadata.com/v3/spells
     *
     * @return Spells|Error
     */
    public function spells(): Spells|Error;

    /**
     * Show all information about one world
     * @see https://dev.tibiadata.com/v3/world/{name}
     *
     * @param string $name
     *
     * @return Worlds|Error
     */
    public function world(string $name): Worlds|Error;

    /**
     * Show all worlds of Tibia
     * @see https://dev.tibiadata.com/v3/worlds
     *
     * @return Worlds|Error
     */
    public function worlds(): Worlds|Error;
}
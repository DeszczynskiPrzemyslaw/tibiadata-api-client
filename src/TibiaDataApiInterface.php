<?php

namespace TibiaDataApi;

use TibiaDataApi\Contents\Characters;
use TibiaDataApi\Contents\Creature;
use TibiaDataApi\Contents\Creatures;
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
     * @return Characters
     */
    public function character(string $name): Characters;

    /**
     * Show all information about one creature
     * @see https://dev.tibiadata.com/v3/creature/{race}
     *
     * @param string $race
     *
     * @return Creature
     */
    public function creature(string $race): Creature;

    /**
     * Show all creatures listed
     * @see https://dev.tibiadata.com/v3/creatures
     *
     * @return Creatures
     */
    public function creatures(): Creatures;

    /**
     * List of all promoted and supported fansites
     * @see https://dev.tibiadata.com/v3/fansites
     *
     * @return Fansites
     */
    public function fansites(): Fansites;

    /**
     * Show all information about one guild
     * @see https://dev.tibiadata.com/v3/guild/{name}
     *
     * @param string $name
     *
     * @return Guilds
     */
    public function guild(string $name): Guilds;

    /**
     * Show all guilds on a certain world
     * @see https://dev.tibiadata.com/v3/guilds/{world}
     *
     * @param string $world
     *
     * @return Guilds
     */
    public function guilds(string $world): Guilds;

    /**
     * Show all highscores of tibia
     * @see https://dev.tibiadata.com/v3/highscores/{world}/{category}/{vocation}
     *
     * @param string $world
     * @param string $category
     * @param string $vocation
     *
     * @return Highscores
     */
    public function highscores(string $world, string $category, string $vocation): Highscores;

    /**
     * Show all information about one house
     * @see https://dev.tibiadata.com/v3/house/{world}/{house_id}
     *
     * @param string $world
     * @param int $houseId
     *
     * @return House
     */
    public function house(string $world, int $houseId): House;

    /**
     * Show all houses filtered on world and town
     * @see https://dev.tibiadata.com/v3/houses/{world}/{town}
     *
     * @param string $world
     * @param string $town
     *
     * @return Houses
     */
    public function houses(string $world, string $town): Houses;

    /**
     * Show all killstatistics filtered on world
     * @see https://dev.tibiadata.com/v3/killstatistics/{world}
     *
     * @param string $world
     *
     * @return Killstatistics
     */
    public function killStatistics(string $world): Killstatistics;

    /**
     * Show news archive with a filtering on 90 days
     * @see https://dev.tibiadata.com/v3/news/archive
     *
     * @return News
     */
    public function newsArchive(): News;

    /**
     * Show news archive with a filtering option on days
     * @see https://dev.tibiadata.com/v3/news/archive/{name}
     *
     * @param int $days
     *
     * @return News
     */
    public function newsArchiveWithDaysFilter(int $days): News;

    /**
     * Show one news entry
     * @see https://dev.tibiadata.com/v3/news/id/{news_id}
     *
     * @param int $news_id
     *
     * @return News
     */
    public function newsId(int $news_id): News;

    /**
     * Show newslist with filtering on articles and news of last 90 days
     * @see https://dev.tibiadata.com/v3/news/latest
     *
     * @return News
     */
    public function newsLatest(): News;

    /**
     * Show news of type news tickers of last 90 days
     * @see https://dev.tibiadata.com/v3/news/newsticker
     *
     * @return News
     */
    public function newsNewsticker(): News;

    /**
     * Show all information about one spell
     * @see https://dev.tibiadata.com/v3/spell/{spell_id}
     *
     * @param string $spell_id
     *
     * @return Spells
     */
    public function spell(string $spell_id): Spells;

    /**
     * Show all spells
     * @see https://dev.tibiadata.com/v3/spells
     *
     * @return Spells
     */
    public function spells(): Spells;

    /**
     * Show all information about one world
     * @see https://dev.tibiadata.com/v3/world/{name}
     *
     * @param string $name
     *
     * @return Worlds
     */
    public function world(string $name): Worlds;

    /**
     * Show all worlds of Tibia
     * @see https://dev.tibiadata.com/v3/worlds
     *
     * @return Worlds
     */
    public function worlds(): Worlds;
}
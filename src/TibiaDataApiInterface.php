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
    public function character(string $name): Characters;

    public function creature(string $race): Creature;

    public function creatures(): Creatures;

    public function fansites(): Fansites;

    public function guild(string $name): Guilds;

    public function guilds(string $world): Guilds;

    public function highscores(string $world, string $category, string $vocation): Highscores;

    public function house(string $world, int $houseId): House;

    public function houses(string $world, string $town): Houses;

    public function killStatistics(string $world): Killstatistics;

    public function newsArchive(int $days = 90): News;

    public function newsId(int $news_id): News;

    public function newsLatest(): News;

    public function newsNewsticker(): News;

    public function spell(string $spell_id): Spells;

    public function spells(): Spells;

    public function world(string $name): Worlds;

    public function worlds(): Worlds;
}
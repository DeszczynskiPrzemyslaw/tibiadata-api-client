<?php

namespace TibiaDataApi\Contents;

class Creature extends Content
{
    public bool $beConvinced;

    public bool $beParalyzed;

    public bool $beSummoned;

    public string $behaviour;

    public int $convincedMana;

    public string $description;

    public int $experiencePoints;

    public bool $featured;

    public int $hitpoints;

    public string $imageUrl;

    public array $immune;

    public bool $isLootable;

    public array $lootList;

    public string $name;

    public string $race;

    public bool $seeInvisible;

    public array $strong;

    public int $summonedMana;

    public array $weakness;
}
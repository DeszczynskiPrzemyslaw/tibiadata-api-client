<?php

namespace TibiaDataApi\Contents;

class Creature extends Content
{
    public ?bool $be_convinced = null;

    public ?bool $be_baralyzed = null;

    public ?bool $be_summoned = null;

    public ?string $behaviour = null;

    public ?int $convinced_mana = null;

    public ?string $description = null;

    public ?int $experience_points = null;

    public ?bool $featured = null;

    public ?int $hitpoints = null;

    public ?string $image_url = null;

    public ?array $immune = null;

    public ?bool $is_lootable = null;

    public ?array $loot_list = null;

    public ?string $name = null;

    public ?string $race = null;

    public ?bool $see_invisible = null;

    public ?array $strong = null;

    public ?int $summoned_mana = null;

    public ?array $weakness = null;
}
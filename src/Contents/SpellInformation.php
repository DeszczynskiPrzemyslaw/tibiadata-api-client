<?php

namespace TibiaDataApi\Contents;

class SpellInformation extends Content
{
    public ?int $amount = null;

    public ?array $city = null;

    public ?int $cooldown_alone = null;

    public ?int $cooldown_group = null;

    public ?string $damage_type = null;

    public ?string $formula = null;

    public ?bool $group_attack = null;

    public ?bool $group_healing = null;

    public ?bool $group_support = null;

    public ?int $level = null;

    public ?int $mana = null;

    public ?bool $premium_only = null;

    public ?int $price = null;

    public ?int $soul_points = null;

    public ?bool $type_instant = null;

    public ?bool $type_rune = null;

    public ?array $vocation = null;
}
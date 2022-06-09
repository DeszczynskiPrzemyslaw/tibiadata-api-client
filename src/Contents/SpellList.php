<?php

namespace TibiaDataApi\Contents;

class SpellList extends Content
{
    public ?string $formula = null;

    public ?bool $group_attack = null;

    public ?bool $group_healing = null;

    public ?bool $group_support = null;

    public ?int $level = null;

    public ?int $mana = null;

    public ?string $name = null;

    public ?bool $premium_only = null;

    public ?int $price = null;

    public ?string $spell_id = null;

    public ?bool $type_instant = null;

    public ?bool $type_rune = null;
}
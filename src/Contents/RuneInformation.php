<?php

namespace TibiaDataApi\Contents;

class RuneInformation extends Content
{
    public ?string $damage_type = null;

    public ?bool $group_attack = null;

    public ?bool $group_healing = null;

    public ?bool $group_support = null;

    public ?int $level = null;

    public ?int $magic_level = null;

    public ?array $vocation = null;
}
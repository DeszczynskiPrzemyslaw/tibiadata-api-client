<?php

namespace TibiaDataApi\Contents;

class Characters extends Content
{
    public array $accountBadges;

    public object $accountInformation;

    public array $achievements;

    /** @var Character */
    public object $character;

    public array $deaths;

    public array $otherCharacters;


    public function setup(): void
    {
        $this->cast('character', Character::class);
    }
}

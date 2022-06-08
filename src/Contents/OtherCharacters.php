<?php

namespace TibiaDataApi\Contents;

use TibiaDataApi\Contents\Characters\Character;
use TibiaDataApi\Contents\Content;

class OtherCharacters extends Content
{
    public array $accountBadges;

    public object $accountInformation;

    public array $achievements;

    public Character $character;

    public array $deaths;

    public array $otherCharacters;
}
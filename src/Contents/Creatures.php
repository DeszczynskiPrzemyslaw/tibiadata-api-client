<?php

namespace TibiaDataApi\Contents;

class Creatures extends Content
{
    /** @var Boosted|null  */
    public ?object $boosted = null;

    /** @var CreatureList[]|null  */
    public ?array $creature_list = null;


    protected function setup(): void
    {
        $this->cast('boosted', Boosted::class);
        $this->castArray('creature_list', CreatureList::class);
    }
}
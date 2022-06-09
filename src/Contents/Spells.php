<?php

namespace TibiaDataApi\Contents;

class Spells extends Content
{
    /** @var Spell|null  */
    public ?object $spell = null;

    /** @var SpellList[]|null  */
    public ?array $spell_list = null;

    public ?string $spell_filter = null;


    protected function setup(): void
    {
        $this->cast('spell', Spell::class);
        $this->castArray('spell_list', SpellList::class);
    }
}
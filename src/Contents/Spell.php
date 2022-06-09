<?php

namespace TibiaDataApi\Contents;

class Spell extends Content
{
    public ?string $description = null;

    public ?bool $has_rune_information = null;

    public ?bool $has_spell_information = null;

    public ?string $image_url = null;

    public ?string $name = null;

    /** @var RuneInformation|null  */
    public ?object $rune_information = null;

    public ?string $spell_id = null;

    /** @var SpellInformation|null  */
    public ?object $spell_information = null;


    protected function setup(): void
    {
        $this->cast('rune_information', RuneInformation::class);
        $this->cast('spell_information', SpellInformation::class);
    }
}
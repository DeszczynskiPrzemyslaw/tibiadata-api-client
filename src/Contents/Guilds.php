<?php

namespace TibiaDataApi\Contents;

class Guilds extends Content
{
    /** @var Guild|null  */
    public ?object $guild = null;

    /** @var Active[]|null  */
    public ?array $active = null;

    /** @var Formation[]|null  */
    public ?array $formation = null;

    public ?string $world = null;


    protected function setup(): void
    {
        $this->cast('guild', Guild::class);
        $this->castArray('active', Active::class);
        $this->castArray('formation', Formation::class);
    }
}
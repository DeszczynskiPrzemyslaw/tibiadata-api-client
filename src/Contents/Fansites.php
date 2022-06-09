<?php

namespace TibiaDataApi\Contents;

class Fansites extends Content
{
    /** @var Promoted[]|null  */
    public ?array $promoted = null;

    /** @var Supported[]|null  */
    public ?array $supported = null;


    protected function setup(): void
    {
        $this->castArray('promoted', Promoted::class);
        $this->castArray('supported', Supported::class);
    }
}
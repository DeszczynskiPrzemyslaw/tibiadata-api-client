<?php

namespace TibiaDataApi\Contents;

class Killstatistics extends Content
{
    /** @var Entries[]|null  */
    public ?array $entries = null;

    /** @var Total|null  */
    public ?object $total = null;

    public ?string $world = null;


    protected function setup(): void
    {
        $this->castArray('entries', Entries::class);
        $this->cast('total', Total::class);
    }
}
<?php

namespace TibiaDataApi\Contents;

class Deaths extends Content
{
    /** @var Assists[]|null  */
    public ?array $assists = null;

    /** @var Killers[]|null  */
    public ?array $killers = null;

    public ?int $level = null;

    public ?string $reason = null;

    public ?string $time = null;


    public function setup(): void
    {
        $this->castArray('assists', Assists::class);
        $this->castArray('killers', Killers::class);
    }
}
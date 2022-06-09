<?php

namespace TibiaDataApi\Contents;

class House extends Content
{
    public ?int $beds = null;

    public ?int $houseid = null;

    public ?string $img = null;

    public ?string $name = null;

    public ?int $rent = null;

    public ?int $size = null;

    /** @var Status|null  */
    public ?object $status = null;

    public ?string $town = null;

    public ?string $type = null;

    public ?string $world = null;


    protected function setup(): void
    {
        $this->cast('status', Status::class);
    }
}
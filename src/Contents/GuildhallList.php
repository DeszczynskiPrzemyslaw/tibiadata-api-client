<?php

namespace TibiaDataApi\Contents;

class GuildhallList extends Content
{
    /** @var Auction|null  */
    public ?object $auction = null;

    public ?bool $auctioned = null;

    public ?int $house_id = null;

    public ?string $name = null;

    public ?int $rent = null;

    public ?bool $rented = null;

    public ?int $size = null;


    protected function setup(): void
    {
        $this->cast('auction', Auction::class);
    }
}
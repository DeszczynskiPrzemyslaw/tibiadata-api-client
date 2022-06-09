<?php

namespace TibiaDataApi\Contents;

class Status extends Content
{
    /** @var Auction|null  */
    public ?object $auction = null;

    public ?bool $is_auctioned = null;

    public ?bool $is_moving = null;

    public ?bool $is_rented = null;

    public ?bool $is_transfering = null;

    public ?string $original = null;

    /** @var Rental|null  */
    public ?object $rental = null;


    protected function setup(): void
    {
        $this->cast('auction', Auction::class);
        $this->cast('rental', Rental::class);
    }
}
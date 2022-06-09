<?php

namespace TibiaDataApi\Contents;

class Auction extends Content
{
    public ?string $auction_end = null;

    public ?bool $auction_ongoing = null;

    public ?int $current_bid = null;

    public ?string $current_bidder = null;

    public ?bool $finished = null;

    public ?string $time_left = null;
}
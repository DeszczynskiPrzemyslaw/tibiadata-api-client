<?php

namespace TibiaDataApi\Contents;

class Rental extends Content
{
    public ?string $moving_date = null;

    public ?string $owner = null;

    public ?string $owner_sex = null;

    public ?string $paid_until = null;

    public ?bool $transfer_accept = null;

    public ?int $transfer_price = null;

    public ?string $transfer_receiver = null;
}
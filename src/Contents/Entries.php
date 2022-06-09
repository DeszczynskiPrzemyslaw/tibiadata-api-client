<?php

namespace TibiaDataApi\Contents;

class Entries extends Content
{
    public ?int $last_day_killed = null;

    public ?int $last_day_players_killed = null;

    public ?int $last_week_killed = null;

    public ?int $last_week_players_killed = null;

    public ?string $race = null;
}
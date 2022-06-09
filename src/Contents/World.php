<?php

namespace TibiaDataApi\Contents;

class World extends Content
{
    public ?string $battleye_date = null;

    public ?bool $battleye_protected = null;

    public ?string $creation_date = null;

    public ?string $game_world_type = null;

    public ?string $location = null;

    public ?string $name = null;

    /** @var OnlinePlayers[]|null  */
    public ?array $online_players = null;

    public ?int $players_online = null;

    public ?bool $premium_only = null;

    public ?string $pvp_type = null;

    public ?string $record_date = null;

    public ?int $record_players = null;

    public ?string $status = null;

    public ?string $tournament_world_type = null;

    public ?string $transfer_type = null;

    public ?array $world_quest_titles = null;


    protected function setup(): void
    {
        $this->castArray('online_players', OnlinePlayers::class);
    }
}
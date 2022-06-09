<?php

namespace TibiaDataApi\Contents;

class Worlds extends Content
{
    /** @var World|null  */
    public ?object $world = null;

    public ?int $players_online = null;

    public ?string $record_date = null;

    public ?int $record_players = null;

    /** @var RegularWorlds[]|null  */
    public ?array $regular_worlds = null;

    /** @var TournamentWorlds[]|null  */
    public ?array $tournament_worlds = null;


    protected function setup(): void
    {
        $this->cast('world', World::class);
        $this->castArray('regular_worlds', RegularWorlds::class);
        $this->castArray('tournament_worlds', TournamentWorlds::class);
    }
}
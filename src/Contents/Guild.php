<?php

namespace TibiaDataApi\Contents;

class Guild extends Content
{
    public ?string $name = null;

    public ?string $rank = null;

    public ?bool $active = null;

    public ?string $description = null;

    public ?string $disband_condition = null;

    public ?string $disband_date = null;

    public ?string $founded = null;

    /** @var Guildhalls[]|null  */
    public ?array $guildhalls = null;

    public ?string $homepage = null;

    public ?bool $in_war = null;

    /** @var Invites[]|null  */
    public ?array $invites = null;

    public ?string $logo_url = null;

    /** @var Members[]|null  */
    public ?array $members = null;

    public ?int $members_invited = null;

    public ?int $members_total = null;

    public ?bool $open_applications = null;

    public ?int $players_offline = null;

    public ?int $players_online = null;

    public ?string $world = null;


    protected function setup(): void
    {
        $this->castArray('guildhalls', Guildhalls::class);
        $this->castArray('invites', Invites::class);
        $this->castArray('members', Members::class);
    }
}
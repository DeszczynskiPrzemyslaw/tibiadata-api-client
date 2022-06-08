<?php

namespace TibiaDataApi\Contents;

class Character extends Content
{
    public ?string $accountStatus = null;

    public ?int $achievementPoints = null;

    public ?string $comment = null;

    public ?string $deletionDate = null;

    public ?array $formerNames = null;

    public ?array $formerWorlds = null;

    public ?Guild $guild = null;

    public ?array $houses = null;

    public ?string $lastLogin = null;

    public ?int $level = null;

    public ?string $marriedTo = null;

    public ?string $name = null;

    public ?string $residence = null;

    public ?string $sex = null;

    public ?string $title = null;

    public ?bool $traded = null;

    public ?int $unlockedTitles = null;

    public ?string $vocation = null;

    public ?string $world = null;


    protected function setup(): void
    {
        $this->cast('guild', Guild::class);
    }
}

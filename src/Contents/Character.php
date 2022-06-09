<?php

namespace TibiaDataApi\Contents;

class Character extends Content
{
    public ?string $account_status = null;

    public ?int $achievement_points = null;

    public ?string $comment = null;

    public ?string $deletion_date = null;

    public ?array $former_names = null;

    public ?array $former_worlds = null;

    /** @var Guild|null  */
    public ?object $guild = null;

    /** @var Houses[]|null  */
    public ?array $houses = null;

    public ?string $last_login = null;

    public ?int $level = null;

    public ?string $married_to = null;

    public ?string $name = null;

    public ?string $residence = null;

    public ?string $sex = null;

    public ?string $title = null;

    public ?bool $traded = null;

    public ?int $unlocked_titles = null;

    public ?string $vocation = null;

    public ?string $world = null;


    protected function setup(): void
    {
        $this->cast('guild', Guild::class);
        $this->castArray('houses', Houses::class);
    }
}

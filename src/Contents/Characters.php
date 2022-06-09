<?php

namespace TibiaDataApi\Contents;

class Characters extends Content
{
    /** @var AccountBadges[]|null  */
    public ?array $account_badges = null;

    /** @var AccountInformation|null  */
    public ?object $account_information = null;

    /** @var Achievements[]|null  */
    public ?array $achievements = null;

    /** @var Character|null */
    public ?object $character = null;

    /** @var Deaths[]|null  */
    public ?array $deaths = null;

    /** @var OtherCharacters[]|null  */
    public ?array $other_characters = null;


    public function setup(): void
    {
        $this->castArray('account_badges', AccountBadges::class);
        $this->cast('account_information', AccountInformation::class);
        $this->castArray('achievements', Achievements::class);
        $this->cast('character', Character::class);
        $this->castArray('deaths', Deaths::class);
        $this->castArray('other_characters', OtherCharacters::class);
    }
}

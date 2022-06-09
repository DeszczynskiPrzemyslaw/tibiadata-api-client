<?php

namespace TibiaDataApi\Contents;

class Highscores extends Content
{
    public ?string $category = null;

    public ?int $highscore_age = null;

    /** @var HighscoreList[]|null  */
    public ?array $highscore_list = null;

    public ?string $vocation = null;

    public ?string $world = null;


    protected function setup(): void
    {
        $this->castArray('highscore_list', HighscoreList::class);
    }
}
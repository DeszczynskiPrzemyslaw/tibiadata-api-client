<?php

namespace TibiaDataApi\Contents\Characters;

use TibiaDataApi\Contents\Content;

class Assists extends Content
{
    public string $name;

    public bool $player;

    public string $summon;

    public bool $traded;
}
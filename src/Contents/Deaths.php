<?php

namespace TibiaDataApi\Contents\Characters;

use TibiaDataApi\Contents\Content;

class Deaths extends Content
{
    public array $assists;

    public array $killers;

    public int $level;

    public string $reason;

    public string $time;
}
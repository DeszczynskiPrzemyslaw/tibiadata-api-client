<?php

namespace TibiaDataApi\Contents\Characters;

use TibiaDataApi\Contents\Content;

class Achievements extends Content
{
    public int $grade;

    public string $name;

    public bool $secret;
}
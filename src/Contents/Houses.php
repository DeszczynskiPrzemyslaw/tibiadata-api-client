<?php

namespace TibiaDataApi\Contents;

use TibiaDataApi\Contents\Content;

class Houses extends Content
{
    public int $houseId;

    public string $name;

    public string $paid;

    public string $town;
}
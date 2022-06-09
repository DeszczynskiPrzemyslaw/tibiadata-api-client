<?php

namespace TibiaDataApi\Contents;

class Houses extends Content
{
    public ?int $houseid = null;

    public ?string $name = null;

    public ?string $paid = null;

    public ?string $town = null;

    /** @var GuildhallList[]|null  */
    public ?array $guildhall_list = null;

    /** @var HouseList[]|null  */
    public ?array $house_list = null;

    public ?string $world = null;


    protected function setup(): void
    {
        $this->castArray('guildhall_list', GuildhallList::class);
        $this->castArray('house_list', HouseList::class);
    }
}
<?php

namespace TibiaDataApi\Contents;

class Promoted extends Content
{
    public ?string $contact = null;

    /** @var ContentType|null  */
    public ?object $content_type = null;

    public ?bool $fansite_item = null;

    public ?string $fansite_item_url = null;

    public ?string $homepage = null;

    public ?array $languages = null;

    public ?string $logo_url = null;

    public ?string $name = null;

    /** @var SocialMedia|null  */
    public ?object $social_media = null;

    public ?array $specials = null;


    protected function setup(): void
    {
        $this->cast('content_type', ContentType::class);
        $this->cast('social_media', SocialMedia::class);
    }
}
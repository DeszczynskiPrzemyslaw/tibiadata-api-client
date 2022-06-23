<?php

use PHPUnit\Framework\TestCase;
use TibiaDataApi\Contents\Boosted;
use TibiaDataApi\Contents\Creatures;
use TibiaDataApi\Contents\Fansites;
use TibiaDataApi\Contents\News;
use TibiaDataApi\Contents\Spells;
use TibiaDataApi\Contents\Worlds;
use TibiaDataApi\TibiaDataApiClient;

class TibiaDataApiClientTest extends TestCase
{
    /** @var TibiaDataApiClient */
    private static $client;


    protected function setUp(): void
    {
        sleep(1);
    }

    public static function setUpBeforeClass(): void
    {
        self::$client = new TibiaDataApiClient('TEST');
    }

    public function testCreaturesContent()
    {
        $response = self::$client->creatures();
        $this->assertInstanceOf(Creatures::class, $response);
        $this->assertInstanceOf(Boosted::class, $response->boosted);
        $this->assertIsArray($response->creature_list);
    }

    public function testFansitesContent()
    {
        $response = self::$client->fansites();
        $this->assertInstanceOf(Fansites::class, $response);
        $this->assertIsArray($response->promoted);
        $this->assertIsArray($response->supported);
    }

    public function testSpellsContent()
    {
        $response = self::$client->spells();
        $this->assertInstanceOf(Spells::class, $response);
        $this->assertNull($response->spell);
        $this->assertIsArray($response->spell_list);
    }

    public function testNewsArchiveContent()
    {
        $response = self::$client->newsArchive();
        $this->assertInstanceOf(News::class, $response);
    }

    public function testNewsLatestContent()
    {
        $response = self::$client->newsLatest();
        $this->assertInstanceOf(News::class, $response);
    }

    public function testNewsNewstickerContent()
    {
        $response = self::$client->newsNewsticker();
        $this->assertInstanceOf(News::class, $response);
    }

    public function testWorldsContent()
    {
        $response = self::$client->worlds();
        $this->assertInstanceOf(Worlds::class, $response);
        $this->assertNull($response->world);
        $this->assertIsArray($response->regular_worlds);
        is_array($response->tournament_worlds)
            ? $this->assertIsArray($response->tournament_worlds)
            : $this->assertNull($response->tournament_worlds);
    }
}
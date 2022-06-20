<?php

namespace TibiaDataApi;

use TibiaDataApi\Contents\Characters;
use TibiaDataApi\Contents\Content;
use TibiaDataApi\Contents\Creature;
use TibiaDataApi\Contents\Creatures;
use TibiaDataApi\Contents\Fansites;
use TibiaDataApi\Contents\Guilds;
use TibiaDataApi\Contents\Highscores;
use TibiaDataApi\Contents\House;
use TibiaDataApi\Contents\Houses;
use TibiaDataApi\Contents\Information;
use TibiaDataApi\Contents\Killstatistics;
use TibiaDataApi\Contents\News;
use TibiaDataApi\Contents\Spells;
use TibiaDataApi\Contents\Worlds;

class TibiaDataApiClient implements TibiaDataApiInterface
{
    private const API_URL = [
        'TEST' => 'https://dev.tibiadata.com/v3',
        'PROD' => 'https://api.tibiadata.com/v3'
    ];

    private string $environment;

    private ?Information $information = null;

    /**
     * Tibia Data API Client constructor.
     *
     * @param string $environment
     * @throws TibiaDataApiException
     */
    public function __construct(string $environment = 'PROD')
    {
        if (!array_key_exists($environment, self::API_URL)) {
            throw new TibiaDataApiException('Wrong environment');
        }
        $this->environment = $environment;
    }

    public function character(string $name): Characters
    {
        $pathParams = [
            "{name}" => $name,
        ];

        return $this->cast(
            $this->sendRequest('GET', '/character/{name}', $pathParams),
            Characters::class
        );
    }

    public function creature(string $race): Creature
    {
        $pathParams = [
            "{race}" => $race,
        ];

        return $this->cast(
            $this->sendRequest('GET', '/creature/{race}', $pathParams),
            Creature::class
        );
    }

    public function creatures(): Creatures
    {
        $pathParams = [];

        return $this->cast(
            $this->sendRequest('GET', '/creatures', $pathParams),
            Creatures::class
        );
    }

    public function fansites(): Fansites
    {
        $pathParams = [];

        return $this->cast(
            $this->sendRequest('GET', '/fansites', $pathParams),
            Fansites::class
        );
    }

    public function guild(string $name): Guilds
    {
        $pathParams = [
            "{name}" => $name
        ];

        return $this->cast(
            $this->sendRequest('GET', '/guild/{name}', $pathParams),
            Guilds::class
        );
    }

    public function guilds(string $world): Guilds
    {
        $pathParams = [
            "{world}" => $world
        ];

        return $this->cast(
            $this->sendRequest('GET', '/guilds/{world}', $pathParams),
            Guilds::class
        );
    }

    public function highscores(string $world, string $category, string $vocation): Highscores
    {
        $pathParams = [
            "{world}" => $world,
            "{category}" => $category,
            "{vocation}" => $vocation,
        ];

        return $this->cast(
            $this->sendRequest('GET', '/highscores/{world}/{category}/{vocation}', $pathParams),
            Highscores::class
        );
    }

    public function house(string $world, int $house_id): House
    {
        $pathParams = [
            "{world}" => $world,
            "{house_id}" => $house_id,
        ];

        return $this->cast(
            $this->sendRequest('GET', '/house/{world}/{house_id}', $pathParams),
            House::class
        );
    }

    public function houses(string $world, string $town): Houses
    {
        $pathParams = [
            "{world}" => $world,
            "{town}" => $town,
        ];

        return $this->cast(
            $this->sendRequest('GET', '/houses/{world}/{town}', $pathParams),
            Houses::class
        );
    }

    public function killstatistics(string $world): Killstatistics
    {
        $pathParams = [
            "{world}" => $world,
        ];

        return $this->cast(
            $this->sendRequest('GET', '/killstatistics/{world}', $pathParams),
            Killstatistics::class
        );
    }

    public function newsArchive(): News
    {
        $pathParams = [];

        return $this->cast(
            $this->sendRequest('GET', '/news/archive', $pathParams),
            News::class
        );
    }

    public function newsArchiveWithDaysFilter(int $days): News
    {
        $pathParams = [
            "{days}" => $days,
        ];

        return $this->cast(
            $this->sendRequest('GET', '/news/archive/{days}', $pathParams),
            News::class
        );
    }

    public function newsId(int $news_id): News
    {
        $pathParams = [
            "{news_id}" => $news_id,
        ];

        return $this->cast(
            $this->sendRequest('GET', '/news/id/{news_id}', $pathParams),
            News::class
        );
    }

    public function newsLatest(): News
    {
        $pathParams = [];

        return $this->cast(
            $this->sendRequest('GET', '/news/latest', $pathParams),
            News::class
        );
    }

    public function newsNewsticker(): News
    {
        $pathParams = [];

        return $this->cast(
            $this->sendRequest('GET', '/news/newsticker', $pathParams),
            News::class
        );
    }

    public function spell(string $spell_id): Spells
    {
        $pathParams = [
            "{spell_id}" => $spell_id,
        ];

        return $this->cast(
            $this->sendRequest('GET', '/spell/{spell_id}', $pathParams),
            Spells::class
        );
    }

    public function spells(): Spells
    {
        $pathParams = [];

        return $this->cast(
            $this->sendRequest('GET', '/spells', $pathParams),
            Spells::class
        );
    }

    public function world(string $name): Worlds
    {
        $pathParams = [
            "{name}" => $name,
        ];

        return $this->cast(
            $this->sendRequest('GET', '/world/{name}', $pathParams),
            Worlds::class
        );
    }

    public function worlds(): Worlds
    {
        $pathParams = [];

        return $this->cast(
            $this->sendRequest('GET', '/worlds', $pathParams),
            Worlds::class
        );
    }

    /**
     * Get api_version and timestamp
     *
     * @return Information|null
     */
    public function getInformation(): ?Information
    {
        return $this->information;
    }

    /**
     * @param string $method
     * @param string $path
     * @param array $pathParams
     *
     * @return string
     */
    private function sendRequest(string $method, string $path, array $pathParams = [])
    {
        $url = self::API_URL[$this->environment] . strtr($path, $pathParams);
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($curl, CURLOPT_URL, $url);
        $response = curl_exec($curl);
        curl_close($curl);

        return $response;
    }

    /**
     * @param string $response
     * @param string $class
     *
     * @return Content
     *
     * @throws TibiaDataApiException
     */
    private function cast(string $response, string $class): Content
    {
        if (!($decoded = json_decode($response))) {
            throw new TibiaDataApiException('Something went wrong.');
        }

        foreach ($decoded as $key => $value) {
            if ($key == 'information') {
                $this->information = new Information($value);
            } else {
                $content = $value;
            }
        }
        if (!isset($content)) {
            throw new TibiaDataApiException('Something went wrong.');
        }

        return new $class($content);
    }

}

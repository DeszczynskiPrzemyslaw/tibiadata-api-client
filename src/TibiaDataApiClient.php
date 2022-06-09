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
    const API_URL = [
        'TEST' => 'https://dev.tibiadata.com/v3',
        'PROD' => 'https://api.tibiadata.com/v3'
    ];

    private $environment;

    private ?Information $information = null;


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
        $queryParams = [];

        return $this->cast(
            $this->request('GET', '/character/{name}', $pathParams, $queryParams),
            Characters::class
        );
    }

    public function creature(string $race): Creature
    {
        $pathParams = [
            "{race}" => $race,
        ];
        $queryParams = [];

        return $this->cast(
            $this->request('GET', '/creature/{race}', $pathParams, $queryParams),
            Creature::class
        );
    }

    public function creatures(): Creatures
    {
        $pathParams = [];
        $queryParams = [];

        return $this->cast(
            $this->request('GET', '/creatures', $pathParams, $queryParams),
            Creatures::class
        );
    }

    public function fansites(): Fansites
    {
        $pathParams = [];
        $queryParams = [];

        return $this->cast(
            $this->request('GET', '/fansites', $pathParams, $queryParams),
            Fansites::class
        );
    }

    public function guild(string $name): Guilds
    {
        $pathParams = [
            "{name}" => $name
        ];
        $queryParams = [];

        return $this->cast(
            $this->request('GET', '/guild/{name}', $pathParams, $queryParams),
            Guilds::class
        );
    }

    public function guilds(string $world): Guilds
    {
        $pathParams = [
            "{world}" => $world
        ];
        $queryParams = [];

        return $this->cast(
            $this->request('GET', '/guilds/{world}', $pathParams, $queryParams),
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
        $queryParams = [];

        return $this->cast(
            $this->request('GET', '/highscores/{world}/{category}/{vocation}', $pathParams, $queryParams),
            Highscores::class
        );
    }

    public function house(string $world, int $house_id): House
    {
        $pathParams = [
            "{world}" => $world,
            "{house_id}" => $house_id,
        ];
        $queryParams = [];

        return $this->cast(
            $this->request('GET', '/house/{world}/{house_id}', $pathParams, $queryParams),
            House::class
        );
    }

    public function houses(string $world, string $town): Houses
    {
        $pathParams = [
            "{world}" => $world,
            "{town}" => $town,
        ];
        $queryParams = [];

        return $this->cast(
            $this->request('GET', '/houses/{world}/{town}', $pathParams, $queryParams),
            Houses::class
        );
    }

    public function killstatistics(string $world): Killstatistics
    {
        $pathParams = [
            "{world}" => $world,
        ];
        $queryParams = [];

        return $this->cast(
            $this->request('GET', '/killstatistics/{world}', $pathParams, $queryParams),
            Killstatistics::class
        );
    }

    public function newsArchive(int $days = 90): News
    {
        $pathParams = [
            "{days}" => $days,
        ];
        $queryParams = [];

        return $this->cast(
            $this->request('GET', '/news/archive/{days}', $pathParams, $queryParams),
            News::class
        );
    }

    public function newsId(int $news_id): News
    {
        $pathParams = [
            "{news_id}" => $news_id,
        ];
        $queryParams = [];

        return $this->cast(
            $this->request('GET', '/news/id/{news_id}', $pathParams, $queryParams),
            News::class
        );
    }

    public function newsLatest(): News
    {
        $pathParams = [];
        $queryParams = [];

        return $this->cast(
            $this->request('GET', '/news/latest', $pathParams, $queryParams),
            News::class
        );
    }

    public function newsNewsticker(): News
    {
        $pathParams = [];
        $queryParams = [];

        return $this->cast(
            $this->request('GET', '/news/newsticker', $pathParams, $queryParams),
            News::class
        );
    }

    public function spell(string $spell_id): Spells
    {
        $pathParams = [
            "{spell_id}" => $spell_id,
        ];
        $queryParams = [];

        return $this->cast(
            $this->request('GET', '/spell/{spell_id}', $pathParams, $queryParams),
            Spells::class
        );
    }

    public function spells(): Spells
    {
        $pathParams = [];
        $queryParams = [];

        return $this->cast(
            $this->request('GET', '/spells', $pathParams, $queryParams),
            Spells::class
        );
    }

    public function world(string $name): Worlds
    {
        $pathParams = [
            "{name}" => $name,
        ];
        $queryParams = [];

        return $this->cast(
            $this->request('GET', '/world/{name}', $pathParams, $queryParams),
            Worlds::class
        );
    }

    public function worlds(): Worlds
    {
        $pathParams = [];
        $queryParams = [];

        return $this->cast(
            $this->request('GET', '/worlds', $pathParams, $queryParams),
            Worlds::class
        );
    }

    public function getInformation(): ?Information
    {
        return $this->information;
    }

    private function request(string $method, string $path, array $pathParams, array $queryParams)
    {
        $url = self::API_URL[$this->environment] . strtr($path, $pathParams);
        $curl = curl_init();
        $queryParams = http_build_query($queryParams);

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($curl, CURLOPT_URL, $url);
        if ($method === 'GET' && !empty($queryParams)) {
            curl_setopt($curl, CURLOPT_URL, $url . '?' . $queryParams);
        }
        if ($method === 'POST' && !empty($queryParams)) {
            curl_setopt($curl, CURLOPT_POSTFIELDS, $queryParams);
        }
        $response = curl_exec($curl);
        curl_close($curl);

        return $response;
    }

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

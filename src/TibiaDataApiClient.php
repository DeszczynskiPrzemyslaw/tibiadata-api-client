<?php

namespace TibiaDataApi;

use TibiaDataApi\Contents\Characters;
use TibiaDataApi\Contents\Content;
use TibiaDataApi\Contents\Information;

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

    /**
     * @param string $name
     */
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

    public function creature(string $race)
    {

    }

    public function creatures()
    {

    }

    public function fansites()
    {

    }

    public function guild(string $name)
    {

    }

    public function guilds(string $world)
    {

    }

    public function highscores(string $world, string $category, string $vocation)
    {

    }

    public function house(string $world, int $houseId)
    {

    }

    public function houses(string $world, string $town)
    {

    }

    public function killstatistics(string $world)
    {

    }

    public function newsArchive(?int $days)
    {

    }

    public function newsId(int $newsId)
    {

    }

    public function newsLatest()
    {

    }

    public function newsNewsticker()
    {

    }

    public function spell(string $spellId)
    {

    }

    public function spells()
    {

    }

    public function world(string $name)
    {

    }

    public function worlds()
    {

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
            throw new TibiaDataApiException('asd');
        }

        foreach ($decoded as $key => $value) {
            if ($key == 'information') {
                $this->information = new Information($value);
            } else {
                $content = $value;
            }
        }
        if (!isset($content)) {
            throw new TibiaDataApiException('asdasd');
        }

        return new $class($content);
    }

}

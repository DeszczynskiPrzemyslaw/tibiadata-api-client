<?php

namespace TibiaDataApi;

interface TibiaDataApiInterface
{
    public function character(string $name);

    public function creature(string $race);

    public function creatures();

    public function fansites();

    public function guild(string $name);

    public function guilds(string $world);

    public function highscores(string $world, string $category, string $vocation);

    public function house(string $world, int $houseId);

    public function houses(string $world, string $town);

    public function killStatistics(string $world);

    public function newsArchive(?int $days);

    public function newsId(int $newsId);

    public function newsLatest();

    public function newsNewsticker();

    public function spell(string $spellId);

    public function spells();

    public function world(string $name);

    public function worlds();
}
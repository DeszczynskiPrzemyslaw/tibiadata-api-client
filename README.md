Tibiadata API Client
====================

Tibiadata API / API ze strony Tibia.com

API Docs
--------

    https://api.tibiadata.com
    https://docs.tibiadata.com/

Installation
------------

```bash
composer require deszczynskiprzemyslaw/tibiadata-api-client
```

Supported Versions
------------------

| Version | PHP version | HTTP client |
|---------|-------------|-------------|
| 1.x     | \>= 8.0     | cURL        |


Methods
-------
```php
character(string $name): Characters
creature(string $race): Creature
creatures(): Creatures
fansites(): Fansites
guild(string $name): Guilds
guilds(string $world): Guilds
highscores(string $world, string $category, string $vocation): Highscores
house(string $world, int $houseId): House
houses(string $world, string $town): Houses
killStatistics(string $world): Killstatistics
newsArchive(): News
newsArchiveWithDaysFilter(int $days): News
newsId(int $news_id): News
newsLatest(): News
newsNewsticker(): News
spell(string $spell_id): Spells
spells(): Spells
world(string $name): Worlds
worlds(): Worlds
```

Usage
-----
```php
<?php

require_once './vendor/autoload.php';

$client = new TibiaDataApi\TibiaDataApiClient;
$response = $client->character('Goraca');
echo $response->character->name // Goraca 
```

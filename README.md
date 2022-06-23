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
character(string $name): Characters|Error
creature(string $race): Creature|Error
creatures(): Creatures|Error
fansites(): Fansites|Error
guild(string $name): Guilds|Error
guilds(string $world): Guilds|Error
highscores(string $world, string $category, string $vocation): Highscores|Error
house(string $world, int $houseId): House|Error
houses(string $world, string $town): Houses|Error
killStatistics(string $world): Killstatistics|Error
newsArchive(): News|Error
newsArchiveWithDaysFilter(int $days): News|Error
newsId(int $news_id): News|Error
newsLatest(): News|Error
newsNewsticker(): News|Error
spell(string $spell_id): Spells|Error
spells(): Spells|Error
world(string $name): Worlds|Error
worlds(): Worlds|Error
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

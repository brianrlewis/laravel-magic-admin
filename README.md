# Laravel Magic Admin SDK

Laravel integration for Magic Admin SDK (https://github.com/brianrlewis/php-magic-admin)

## Installation

Run this command to install via composer.

```
composer require brianrlewis/laravel-magic-admin
```

Publish config file.

```
php artisan vendor:publish --tag=config --provider="BrianRLewis\LaravelMagicAdmin\ServiceProvider"
```

Obtain your secret api key by creating an account at https://magic.link

Add MAGIC_SECRET_API_KEY=sk_XXXX_XXXXXXXXXXXXXXXX to your .env file.

## Usage

Get instance using the app helper:

```
$magic = app('BrianRLewis\LaravelMagicAdmin\Magic');

$magic->token->validate('<DIDToken>');

$metadata = $magic->users->getMetadataByToken('<DIDToken>');
```

Get instance using the facade:

```
use BrianRLewis\LaravelMagicAdmin\Facade as Magic;
// OR
use Magic;

Magic::token()->validate('<DIDToken>');

$metadata = Magic::users()->getMetadataByToken('<DIDToken>');
```

For further documentation on usage go to https://github.com/brianrlewis/php-magic-admin

# Silex Blade Template Engine Service Provider
The BladeServiceProvider provides integration with the Blade template engine.

## Installation (silex 2)
```
composer require aea/blade-service-provider
```
## Usage

```php
$app->register(new \Aea\ServiceProvider\BladeServiceProvider(), [
    'blade.view_path' => __DIR__ . '/views',
    'blade.cache_path' => __DIR__ . '/cache'
]);
$app['blade']->view('main.index')
```
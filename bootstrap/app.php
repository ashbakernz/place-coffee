<?php

require __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application([
    'debug' => true
]);

$app->register(new \Aea\ServiceProvider\BladeServiceProvider(), [
    'blade.view_path' => __DIR__ . '/views',
    'blade.cache_path' => __DIR__ . '/cache'
]);


$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
));

$app->register(new Moust\Silex\Provider\CacheServiceProvider, [
  'cache.options' => [
    'driver' => 'file',
    'cache_dir' => __DIR__ . '/../cache/images'
  ]
]);


$app->register(new Silex\Provider\DoctrineServiceProvider, [
    'db.options' => [
      'driver' => 'pdo_mysql',
      'host' => 'localhost',
      'dbname' => 'placecoffee',
      'user' => 'placecoffee',
      'password' => 'placecoffee',
      'charset' => 'utf8mb4',
    ]
]);

$app->register(new App\Providers\ImageServiceProvider);

require __DIR__ . '/../routes/web.php';

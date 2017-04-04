<?php

namespace App\Providers;

use Pimple\{Container, ServiceProviderInterface};
use Intervention\Image\ImageManager;
/**
*
*/
class ImageServiceProvider implements ServiceProviderInterface
{

  public function register(Container $app)
  {
    $app['image'] = $app->factory(function (){
        return new ImageManager;
    });
  }
}

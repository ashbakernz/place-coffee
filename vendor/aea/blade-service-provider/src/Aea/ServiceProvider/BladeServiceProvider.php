<?php
/**
 * Created by PhpStorm.
 * User: aea
 * Date: 19.02.2016
 * Time: 2:01
 */

namespace Aea\ServiceProvider;

use Aea\Model\BladeProxy;
use Philo\Blade\Blade;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class BladeServiceProvider implements ServiceProviderInterface
{
    /**
     * Registers services on the given container.
     *
     * This method should only be used to configure services and parameters.
     * It should not get services.
     *
     * @param Container $app A container instance
     */
    public function register(Container $app)
    {
        $app['blade'] = function () use ($app) {
            return new BladeProxy(new Blade($app['blade.view_path'], $app['blade.cache_path']));
        };
    }
}
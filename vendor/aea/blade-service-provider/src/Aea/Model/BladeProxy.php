<?php
/**
 * Created by PhpStorm.
 * User: aea
 * Date: 19.02.2016
 * Time: 11:40
 */

namespace Aea\Model;

use Philo\Blade\Blade;

class BladeProxy
{
    private $blade;

    public function __construct(Blade $blade)
    {
        $this->blade = $blade;
    }

    public function view($view, $values = [])
    {
        return $this->blade->view()->make($view, $values)->render();
    }

    public function __call($name, $args)
    {
        return call_user_func_array([$this->blade->view(), $name], $args);
    }
}
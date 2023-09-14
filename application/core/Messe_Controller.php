<?php

use App\Service\MessageGenerator;
use Psr\Container\ContainerInterface;

defined('BASEPATH') || exit('No direct script access allowed');

class Messe_Controller extends CI_Router
{
    public ?CI_Benchmark $benchmark;
    public ?CI_Controller $controller;
    public ?CI_Exceptions $exceptions;
    public ?CI_Hooks $hooks;
    public ?CI_Input $input;
    public ?CI_Lang $lang;
    public ?CI_Loader $load;
    public ?CI_Log $log;
    public ?CI_Output $output;
    public ?CI_Router $router;
    public ?CI_Security $security;
    public ?CI_URI $uri;
    public ?CI_Utf8 $utf8;

    public function getContainer(): ContainerInterface
    {
        global $container;
        return $container;
    }

    /**
     *
     * @template T
     * @param class-string<T> $class 클래스 명
     * @return T
     */
    public function fromContainer(string $class): mixed
    {
        return $this->getContainer()->get($class);
    }
}

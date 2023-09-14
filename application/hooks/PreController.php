<?php

use App\Service\Mailer;
use App\Service\MessageGenerator;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\DependencyInjection\Reference;

final class PreController
{
    public function load(array $params = [])
    {
        global $container;

        $container = new ContainerBuilder();
        $loader = new YamlFileLoader($container, new FileLocator(APPPATH . 'config'));
        $loader->load($params['serviceFilename'] ?? 'services.yaml');
    }
}

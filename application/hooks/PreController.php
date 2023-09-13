<?php

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

final class PreController
{
    public function load(array $params)
    {
        $container = new ContainerBuilder();
        $loader = new YamlFileLoader($container, new FileLocator(APPPATH . 'config'));
        $loader->load($params['serviceFilename'] ?? 'services.yaml');
    }
}

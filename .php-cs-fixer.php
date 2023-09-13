<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude('application/views')
    ->in(__DIR__);

$config = new PhpCsFixer\Config();
return $config->setRules([
    '@PER' => true,
    '@Symfony' => true,
])->setFinder($finder);

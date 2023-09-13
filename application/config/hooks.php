<?php

defined('BASEPATH') || exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/userguide3/general/hooks.html
|
*/

$hook = [
    'pre_system' => [
        [
            'class'    => 'PreSystem',
            'function' => 'load',
            'filename' => 'PreSystem.php',
            'filepath' => 'hooks',
            'params'   => ['envDir' => FCPATH]
        ]
    ],
    'cache_override' => [],
    'pre_controller' => [],
    'post_controller_constructor' => [],
    'post_controller' => [],
    'post_system' => [],
];

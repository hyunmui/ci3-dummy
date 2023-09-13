<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Messe_Router extends CI_Router
{
    public function __construct($routing = null)
    {
        $suffix = config_item('controller_suffix');
        parent::__construct($routing);

        if (!str_ends_with($this->class, $suffix)) {
            $this->set_class($this->class . $suffix);
        }
    }
}

/** End of Messe_Router.php */

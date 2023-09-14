<?php

use App\Service\MessageGenerator;
use App\Service\TwitterClient;
use App\Util\Rot13Transformer;

defined('BASEPATH') || exit('No direct script access allowed');

class WelcomeController extends Messe_Controller
{
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     *
     * @see https://codeigniter.com/userguide3/general/urls.html
     */
    public function index()
    {
        $this->load->view('welcome_message');
    }

    public function test_mode(): void
    {
        $object = $this->fromContainer(MessageGenerator::class);
        // $object = $this->fromContainer('message_generator');
        dump($object);
    }

    public function test(): void
    {
        dump($this->fromContainer(Rot13Transformer::class));
    }
}

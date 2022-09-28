<?php

namespace App;

use Jenssegers\Blade\Blade;

class ViewController
{
    public $template;
    public $args;

    public function __construct($template, $args)
    {
        $blade = new Blade('/var/www/html/resources/views', '/var/www/html/storage/cache');

        $this->template = $template;
        $this->args = $args;

        echo $blade->render($template, $args);

    }
}
<?php

namespace App\Action;

use Slim\Psr7\Request;
use Slim\Psr7\Response;
use Slim\Views\PhpRenderer;

abstract class AbstractAction
{
    protected $phpView;

    public function __construct()
    {
        $this->phpView = new PhpRenderer("../templates", ["title" => "Directory Finder"], "layout.php");
    }

    abstract public function __invoke(Request $request, Response $response);
}


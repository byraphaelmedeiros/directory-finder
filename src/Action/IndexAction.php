<?php

namespace App\Action;

use Slim\Psr7\Request;
use Slim\Psr7\Response;

final class IndexAction extends AbstractAction
{
    public function __invoke(Request $request, Response $response): Response
    {
        $response = $this->phpView->render(new Response(), "index.php", ["name" => "John"]);

        return $response;
    }
}

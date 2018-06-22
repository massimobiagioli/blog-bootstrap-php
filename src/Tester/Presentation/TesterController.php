<?php declare (strict_types = 1);

namespace MyApp\Tester\Presentation;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final class TesterController
{
    public function show(Request $request): Response
    {
        $response = new Response();
        $response->setContent(json_encode(array(
            'data' => 'TESTER OK!',
        )));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
}

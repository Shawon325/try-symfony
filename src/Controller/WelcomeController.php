<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class WelcomeController
{

    public function index(): Response
    {
        return new Response('Welcome');
    }
}

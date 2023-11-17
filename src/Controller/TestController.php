<?php

namespace App\Controller;

use Symfony\Component\BrowserKit\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController {
    #[Route('/test', name: 'app_test')]
    public function number() : Response
    {
        dd('welcome! ');
    }
}
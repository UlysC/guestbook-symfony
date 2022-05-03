<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(Request $request): Response
    {
        $user = $request->query->get('hello') ?? 'Anon';
        $greet = sprintf('<h1>Hello %s</h1>', htmlspecialchars($user));
        return new Response(<<<EOF
            <html>
                <body>
                    $greet
                    <img src="/images/underconstruction.gif"/>
                </body>
            </html>
        EOF);
    }
}

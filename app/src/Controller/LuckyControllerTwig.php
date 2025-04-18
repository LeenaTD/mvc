<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class LuckyControllerTwig extends AbstractController
{
    #[Route("/lucky/number/twig", name: "lucky_number")]
    public function number(): Response
    {
        $number = random_int(0, 100);

        $data = [
            'number' => $number
        ];

        return $this->render('lucky_number.html.twig', $data);
    }



    #[Route("/home", name: "home")]
    public function home(): Response
    {
        return $this->render('home.html.twig');
    }



    #[Route("/about", name: "about")]
    public function about(): Response
    {
        return $this->render('about.html.twig');
    }



    #[Route("/me", name: "me")]
    public function me(): Response
    {
        return $this->render('me.html.twig');
    }



    #[Route("/report", name: "report")]
    public function report(): Response
    {
        return $this->render('report.html.twig');
    }



    #[Route("/lucky", name: "lucky")]
    public function lyckyNumber(): Response
    {
        $number = random_int(0, 100);
        $cookies = [
            'cookies1.jpg',
            'cookies2.jpg',
            'cookies3.jpg',
            'cookies4.jpg',
            'cookies5.jpg',
            'cookies6.jpg',
            'cookies7.jpg',
            'cookies8.jpg',
        ];
        $randomCookie = $cookies[array_rand($cookies)];
        $rotation = rand(-30, 30);

        $data = [
            'number' => $number,
            'cookie' => $randomCookie,
            'rotation' => $rotation,
        ];

        return $this->render('lucky.html.twig', $data);
    }



    #[Route("/api", name: "landingPage", methods: ["GET"])]
    public function landingPage(Request $request): Response
    {
        // all api routes with its key and api route
        $apiRoutes = [
            'number' => [
                'path' => '/api/lucky/number',
                'method' => 'GET',
                'description' => 'Return a random number as a magic number.',

            ],
            'quote' => [
                'path' => '/api/quote',
                'method' => 'GET',
                'description' => 'Return an inspirational quote with date and timestamp.',
            ]
        ];

        // get a route by its selected key eg. ?apiRoute=number
        $selectedKey = $request->query->get('apiRoute');
        $selectedRoute = $apiRoutes[$selectedKey] ?? null;

        $data = [
            'apiRoutes' => $apiRoutes,
            'selectedRoute' => $selectedRoute,
            'selectedKey' => $selectedKey,
        ];

        return $this->render('landingpage.html.twig', $data);
    }

}
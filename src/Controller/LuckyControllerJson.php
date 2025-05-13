<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyControllerJson
{
    #[Route("/api/lucky/number")]
    public function jsonNumber(): Response
    {
        $number = random_int(0, 100);

        $data = [
            'lucky-number' => $number,
            'lucky-message' => 'Hi Mega JSON response there!',
        ];

        // $response = new Response();
        // $response->setContent(json_encode($data));
        // $response->headers->set('Content-Type', 'application/json');

        // return $response;

        // return new JsonResponse($data);


        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }



    #[Route("/api/quote", name:"quote")]
    public function quote(): Response
    {
        $quotes = [
            "All that glitters is not gold - William Shakespeare",
            "Genius is one percent of inspiration and ninety nine percent perspiration - Thomas Edison",
            "The only thing we have to fear is fear itself - Franklin D. Roosevelt",
            "What does not kill us makes us stronger - Friedrich Nietzsche",
            "Courage is what it takes to stand up and speak; courage is also what it takes to sit down and listen - Winston Churchill"
        ];

        $quote = $quotes[array_rand($quotes)];

        $date = date('Y-m-d');
        $timestamp = time();

        $data = [
            'quote' => $quote,
            'date' => $date,
            'timestamp' => $timestamp,
        ];



        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }

}

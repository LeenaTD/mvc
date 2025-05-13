<?php

namespace App\Controller;

use App\Card\Card;
use App\Card\CardGraphic;
use App\Card\CardHand;
use App\Card\DeckOfCards;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class CardGameControllerJson extends AbstractController
{
    // #[Route("/card", name: "card_instruction", methods: ['GET'])]
    // public function instruction(): Response
    // {
    //     return $this->render('card/instruction.html.twig');
    // }



    // set up the card game
    // #[Route("/card/play", name: "card_play", methods: ['GET'])]
    // public function play(): Response
    // {
    //     return $this->render('card/play.html.twig');
    // }



    // initialize the game
    // #[Route("/card/init", name: "card_init", methods: ['POST'])]
    // public function init(
    //     SessionInterface $session
    // ): Response
    // {
    //     $deck = new DeckOfCards();
    //     $deck->shuffle();
    //     $session->set('deck', $deck);

    //     return $this->redirectToRoute('card_play');
    // }




    // show 52 cards sorted by suit and value
    #[Route("/api/deck", name: "api_deck", methods: ['GET'])]
    public function apiDeck(): Response
    {
        // always have a deck of 52 cards
        $deck = new DeckOfCards();
        $cards = $deck->getRemainingDeck();


        // define the order of suit and value
        $suitOrder = ['Clubs' => 0, 'Diamonds' => 1, 'Hearts' => 2, 'Spades' => 3];
        $valueOrder = ['A' => 1, '2' => 2, '3' => 3, '4' => 4, '5' => 5, '6' => 6, '7' => 7, '8' => 8, '9' => 9, '10' => 10, 'J' => 11, 'Q' => 12, 'K' => 13];


        // before sorting, store corresponding suit and value
        $suits = [];
        $values = [];

        foreach ($cards as $card) {// loop throug every card
            $suits[] = $suitOrder[$card->getSuit()];// get suit as a str, then look up index in $suitOrder
            $values[] = $valueOrder[$card->getValue()];// get value, look up value in $valueORder
        }

        // sort by suit, then sort by value
        array_multisort($suits, SORT_ASC, $values, SORT_ASC, $cards);

        $data = [];
        foreach ($cards as $card) {
            $data[] = [
                'suit' => $card->getSuit(),
                'value' => $card->getValue(),
                'graphic' => $card->getAsString()
            ];
        }

        return new JsonResponse([
            'deck' => $data,
            'remaining' => count($data)
        ]);

    }



    #[Route("/api/deck/shuffle", name: "api_deck_shuffle", methods: ['POST'])]
    public function apiShuffle(
        SessionInterface $session
    ): JsonResponse {
        $deck = new DeckOfCards();// always reset and then shuffle a new deck
        $deck->shuffle();

        $session->set('deck', $deck);// store in session

        $cards = $deck->getRemainingDeck();

        $data = [];
        foreach ($cards as $card) {
            $data[] = [
                'suit' => $card->getSuit(),
                'value' => $card->getValue(),
                'graphic' => $card->getAsString()
            ];
        }

        return new JsonResponse([
            'deck' => $data,
            'remaining' => count($data)
        ]);

    }


    // test shuffle with POST
    #[Route("/test/api/shuffle", name: "test_api_shuffle_post", methods: ['GET'])]
    public function testShufflePost(): Response
    {
        return $this->render('card/test/shuffle_post.html.twig');
    }



    // draw 1 card
    #[Route("/api/deck/draw", name: "api_deck_draw_one", methods: ['POST'])]
    public function apiDrawOne(
        SessionInterface $session
    ): Response {
        $deck = $session->get('deck');

        if (!$deck) {
            $deck = new DeckOfCards();
            $deck->shuffle();
            $session->set('deck', $deck);
        }

        $drawnOneCard = $deck->draw(1);
        $session->set('deck', $deck);// update session

        $drawnCard = [];
        foreach ($drawnOneCard as $card) {
            $drawnCard[] = [
                'suit' => $card->getSuit(),
                'value' => $card->getValue(),
                'graphic' => $card->getAsString()
            ];
        }

        return new JsonResponse([
            'drawnCard' => $drawnCard,
            'remaining' => count($deck->getRemainingDeck())
        ]);


    }



    // test draw 1 card with POST
    #[Route("/test/api/draw", name: "test_api_draw_one_post", methods: ['GET'])]
    public function testDrawOnePost(): Response
    {
        return $this->render('card/test/draw_one_post.html.twig');
    }



    // draw many cards
    #[Route("/api/deck/draw/{number<\d+>}", name: "api_deck_draw_many", methods: ['POST'])]
    public function apiDrawMany(
        int $number,
        SessionInterface $session
    ): Response {
        $deck = $session->get('deck');

        if (!$deck) {
            $deck = new DeckOfCards();
            $deck->shuffle();
            $session->set('deck', $deck);
        }

        $drawnManyCards = $deck->draw($number);
        $session->set('deck', $deck);

        $drawnCards = [];
        foreach ($drawnManyCards as $card) {
            $drawnCards[] = [
                'suit' => $card->getSuit(),
                'value' => $card->getValue(),
                'graphic' => $card->getAsString()
            ];
        }

        return new JsonResponse([
            'drawnCards' => $drawnCards,
            'remaining' => count($deck->getRemainingDeck())
        ]);
    }



    // test api draw many with POST
    #[Route("/test/api/draw/many", name: "test_api_draw_many_post", methods: ['GET'])]
    public function testDrawManyPost(): Response
    {
        return $this->render('card/test/draw_many_post.html.twig');
    }

}

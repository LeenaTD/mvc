<?php

namespace App\Controller;

use App\Card\Card;
use App\Card\CardGraphic;
use App\Card\CardHand;
use App\Card\DeckOfCards;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class CardGameController extends AbstractController
{
    #[Route("/card", name: "card_instruction", methods: ['GET'])]
    public function instruction(): Response
    {
        return $this->render('card/instruction.html.twig');
    }


    //session langding page to debug
    #[Route("/session", name: "page_session", methods: ['GET'])]
    public function showSession(
        SessionInterface $session
    ): Response {
        $sessionData = $session->all();

        $data = [
            'session' => $sessionData
        ];

        return $this->render('card/session.html.twig', $data);
    }

    // session delete
    #[Route("/session/delete", name: "page_session_delete", methods: ['POST'])]
    public function sessionDelete(
        SessionInterface $session
    ): Response {
        $session->clear();

        $this->addFlash('success', 'Session has been cleared!');

        return $this->redirectToRoute('page_session');
    }




    // test draw a card
    #[Route("/card/test/draw", name: "card_test_draw")]
    public function testDraw(): Response
    {
        $suits = ['Clubs', 'Hearts', 'Diamonds', 'Spades'];
        $values = ['A', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K'];

        $randomSuit = $suits[array_rand($suits)];
        $randdomValue = $values[array_rand($values)];

        $card = new Card($randomSuit, $randdomValue);
        return new Response($card->getAsString());
    }


    //  test draw many cards
    #[Route("/card/test/draw/{num<\d+>}", name: "card_test_draw_many")]
    public function testDrawMany(int $num): Response
    {
        $suits = ['Clubs', 'Hearts', 'Diamonds', 'Spades'];
        $values = ['A', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K'];

        $cards = [];

        for ($i = 0; $i < $num; $i++) {
            $randomSuit = $suits[array_rand($suits)];
            $randdomValue = $values[array_rand($values)];
            $cards[] = new CardGraphic($randomSuit, $randdomValue);
        }

        $data = [
            'cards' => $cards,
            'num' => $num,
        ];

        return $this->render('card/test/draw_many.html.twig', $data);
    }



    // test composition CardHand class
    #[Route("/card/test/cardhand/{num<\d+>}", name: "card_test_card_hand")]
    public function testCardHand(int $num): Response
    {
        $hand = new CardHand();

        $suits = ['Clubs', 'Hearts', 'Diamonds', 'Spades'];
        $values = ['A', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K'];

        for ($i = 0; $i < $num; $i++) {
            $randomSuit = $suits[array_rand($suits)];
            $randdomValue = $values[array_rand($values)];
            $hand->addCard(new CardGraphic($randomSuit, $randdomValue));
        }

        $data = [
            'cards' => $hand->getAsString(),
            'num' => $hand->getNumberOfCards(),
        ];

        return $this->render('card/test/cardhand.html.twig', $data);
    }



    // set up the card game
    #[Route("/card/play", name: "card_play", methods: ['GET'])]
    public function play(): Response
    {
        return $this->render('card/play.html.twig');
    }



    // initialize the game
    #[Route("/card/init", name: "card_init", methods: ['POST'])]
    public function init(
        SessionInterface $session
    ): Response {
        $deck = new DeckOfCards();
        $deck->shuffle();
        $session->set('deck', $deck);

        return $this->redirectToRoute('card_play');
    }




    // show 52 cards sorted by suit and value
    #[Route("/card/deck", name: "card_deck", methods: ['GET'])]
    public function deck(
        SessionInterface $session
    ): Response {
        // get the deck object from session, this deck was previously stored on /card/init
        // $deck = $session->get('deck');

        // always have a deck of 52 cards
        $deck = new DeckOfCards();
        $cards = $deck->getRemainingDeck();// get all cards in the deck


        // define the order of suit and value
        $suitOrder = ['Clubs' => 0, 'Diamonds' => 1, 'Hearts' => 2, 'Spades' => 3];
        $valueOrder = ['A' => 1, '2' => 2, '3' => 3, '4' => 4, '5' => 5, '6' => 6, '7' => 7, '8' => 8, '9' => 9, '10' => 10, 'J' => 11, 'Q' => 12, 'K' => 13];


        // before sorting
        // store corresponding suit and value, eg. queen of clubs, ace of diamonds, king of clubs
        $suits = [];// store [0, 1, 0]
        $values = [];// store [12, 1, 13]

        foreach ($cards as $card) {// loop throug every card
            $suits[] = $suitOrder[$card->getSuit()];// get suit as a str, then look up index in $suitOrder
            $values[] = $valueOrder[$card->getValue()];// get value, look up value in $valueORder
        }

        // sort by suit, then sort by value
        array_multisort($suits, SORT_ASC, $values, SORT_ASC, $cards);

        $data = [
            'cards' => $cards
        ];

        return $this->render('card/play.html.twig', $data);
    }




    #[Route("/card/deck/shuffle", name: "card_deck_shuffle", methods: ['POST'])]
    public function shuffle(
        SessionInterface $session
    ): Response {
        //$deck = $session->get('deck');// get deck object from session, via init

        $deck = new DeckOfCards();// always reset and then shuffle a new deck

        $deck->shuffle();
        $session->set('deck', $deck);// update session with new shuffled cards

        $data = [
            'cards' => $deck->getRemainingDeck()
        ];

        return $this->render('card/play.html.twig', $data);

    }


    #[Route("/card/deck/draw", name: "card_deck_draw_one", methods: ['GET'])]
    public function drawOne(
        SessionInterface $session
    ): Response {
        $deck = $session->get('deck');

        if (!$deck) {
            $deck = new DeckOfCards();
            $deck->shuffle();
            $session->set('deck', $deck);
        }

        $drawOneCard = $deck->draw(1);
        $session->set('deck', $deck);// update session

        $data = [
            'cards' => $drawOneCard,
            'remaining' => count($deck->getRemainingDeck())
        ];


        return $this->render('card/play.html.twig', $data);
    }



    // #[Route("/card/deck/draw", name: "card_deck_draw_many", methods: ['POST'])]
    // public function drawMany(
    //     Request $request,
    //     SessionInterface $session
    // ): Response
    // {

    //     $num = (int) $request->get('num', 1);// default to 1 if no selected

    //     $deck = $session->get('deck');

    //     if (!$deck) {
    //         $deck = new DeckOfCards();
    //         $deck->shuffle();
    //         $session->set('deck', $deck);
    //     }

    //     $drawCards = $deck->draw($num);
    //     $session->set('deck', $deck);// update session

    //     $data = [
    //         'cards' => $drawCards,
    //         'remaining' => count($deck->getRemainingDeck())
    //     ];

    //     // {num<\d+>}

    //     return $this->render('card/play.html.twig', $data);
    // }



    #[Route("/card/deck/draw/{number<\d+>}", name: "card_deck_draw_many", methods: ['POST'])]
    public function drawMany(
        int $number,
        SessionInterface $session
    ): Response {
        $deck = $session->get('deck');

        if (!$deck) {
            $deck = new DeckOfCards();
            $deck->shuffle();
            $session->set('deck', $deck);
        }

        $drawCards = $deck->draw($number);
        $session->set('deck', $deck);// update session

        $data = [
            'cards' => $drawCards,
            'remaining' => count($deck->getRemainingDeck())
        ];



        return $this->render('card/play.html.twig', $data);
    }

}

<?php

namespace App\Card;

use App\Card\CardGraphic;

class DeckOfCards
{
    private array $deck = [];// hold the cards in the deck

    public function __construct()
    {
        // there are 4 suits and 13 card values
        $suits = ['Clubs', 'Hearts', 'Diamonds', 'Spades'];
        $values = ['A', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K'];

        // loop through 52 cards, then adds them to array $deck
        foreach ($suits as $suit) {
            foreach ($values as $value) {
                $this->deck[] = new CardGraphic($suit, $value);
            }
        }
    }


    // shuffle the order of cards in the deck
    public function shuffle(): void
    {
        shuffle($this->deck);
    }



    // draw one or multiple cards from the deck
    public function draw(int $count): array
    {
        return array_splice($this->deck, 0, $count);
    }


    // get the number of cards remaining in deck
    public function getNumberOfCardsLeftInDeck(): int
    {
        return count($this->deck);
    }


    // get the remaining undealt cards in the deck
    public function getRemainingDeck(): array
    {
        return $this->deck;
    }








}

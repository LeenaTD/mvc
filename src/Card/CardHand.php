<?php

namespace App\Card;

use App\Card\Card;
use App\Card\DeckOfCards;

class CardHand
{
    private array $cards = [];


    // add a card to hand
    public function addCard(Card $card): void
    {
        $this->cards[] = $card;
    }


    public function getNumberOfCards(): int
    {
        return count($this->cards);
    }


    // see which cards are currently in hand
    public function getCardsInHand(): array
    {
        return $this->cards;
    }




    public function getAsString(): array
    {
        $result = [];

        foreach ($this->cards as $card) {
            $result[] = $card->getAsString();
        }
        return $result;
    }



}

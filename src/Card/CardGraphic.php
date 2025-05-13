<?php

namespace App\Card;

class CardGraphic extends Card
{
    private array $representation = [
        'Clubs' => [
            'A' => '🃑', '2' => '🃒', '3' => '🃓', '4' => '🃔', '5' => '🃕',
            '6' => '🃖', '7' => '🃗', '8' => '🃘', '9' => '🃙', '10' => '🃚',
            'J' => '🃛', 'Q' => '🃝', 'K' => '🃞'
        ],
        'Hearts' => [
            'A' => '🂱', '2' => '🂲', '3' => '🂳', '4' => '🂴', '5' => '🂵',
            '6' => '🂶', '7' => '🂷', '8' => '🂸', '9' => '🂹', '10' => '🂺',
            'J' => '🂻', 'Q' => '🂽', 'K' => '🂾'
        ],
        'Diamonds' => [
            'A' => '🃁', '2' => '🃂', '3' => '🃃', '4' => '🃄', '5' => '🃅',
            '6' => '🃆', '7' => '🃇', '8' => '🃈', '9' => '🃉', '10' => '🃊',
            'J' => '🃋', 'Q' => '🃍', 'K' => '🃎'
        ],
        'Spades' => [
            'A' => '🂡', '2' => '🂢', '3' => '🂣', '4' => '🂤', '5' => '🂥',
            '6' => '🂦', '7' => '🂧', '8' => '🂨', '9' => '🂩', '10' => '🂪',
            'J' => '🂫', 'Q' => '🂭', 'K' => '🂮'
        ]
    ];

    public function __construct(string $suit, string $value)
    {
        parent::__construct($suit, $value);
    }

    public function getAsString(): string
    {
        $suit = $this->getSuit();
        $value = $this->getValue();

        return $this->representation[$suit][$value];
    }
}

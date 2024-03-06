<?php

namespace Actor;
use util\{Vector2, TileColor, ActorType};

class QueenBee extends Actor {

    public function __construct(TileColor $tileColor, Vector2 $initialPos) {
        parent::__construct($tileColor, $initialPos, ActorType::QueenBee);
    }
}
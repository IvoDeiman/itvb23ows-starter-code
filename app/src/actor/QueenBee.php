<?php

namespace Actor;
use util\{Vector2, TileColor, ActorType};

class QueenBee extends Actor {
    /* Moves one tile per turn. Must be place within the first four moves.
     * If fourth move but not placed, it will be mandatory to play the Queen Bee.
     * If a Queen bee is completely surrounded the owner of the queen bee loses.
     * If both queen bees are surrounded within the same turn, the game will draw.
     */
    public function __construct(TileColor $tileColor, Vector2 $initialPos) {
        parent::__construct($tileColor, $initialPos, ActorType::QueenBee);
    }
}
<?php

namespace Actor;
use util\{TileColor, Vector2, ActorType};

class Beetle extends Actor {

    public function __construct(TileColor $tileColor, Vector2 $initialPos,)
    {
        parent::__construct($tileColor, $initialPos, ActorType::Beetle);
    }
}
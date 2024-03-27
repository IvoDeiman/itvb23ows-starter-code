<?php

namespace Actor;
use util\{TileColor, Vector2, ActorType};

class Ant extends Actor {
    /* The ant is allowed to move on the outer rim of the swarm. The ant has unlimited movement.
     *
     */

    public function __construct(TileColor $tileColor, Vector2 $initialPos,)
    {
        parent::__construct($tileColor, $initialPos, ActorType::Ant);
    }

    public function move(Vector2 $currentPos, Vector2 $newPosition)
    {
        parent::move($currentPos, $newPosition);

    }
}
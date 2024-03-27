<?php

namespace Actor;
use util\{TileColor, Vector2, ActorType};

class Spider extends Actor {
    /* The spider can move thrice in a turn, no more and no less.
     * Is not allowed to move onto the same spot in the same turn.
     * Has to be next to another insect at all times.
     */

    public function __construct(TileColor $tileColor, Vector2 $initialPos,)
    {
        parent::__construct($tileColor, $initialPos, ActorType::Spider);
    }
}
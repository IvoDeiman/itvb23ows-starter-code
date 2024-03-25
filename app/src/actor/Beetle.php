<?php

namespace Actor;
use util\{TileColor, Vector2, ActorType};

class Beetle extends Actor {
    /* Allowed one step per turn
     * Allowed to be on top of other insects in the swarm.
     * If a beetle is atop another insect, the other cannot move.
     * the upper tile controls the tile, meaning only that color can summon adjacent ones.
     * A beetle is allowed to move into a surrounded tile, being one of the few to do so.
     * The only way to block a beetle is to put another on top.
     * All four beetles are allowed to be stacked atop each other
     */
    public function __construct(TileColor $tileColor, Vector2 $initialPos,)
    {
        parent::__construct($tileColor, $initialPos, ActorType::Beetle);
    }
}
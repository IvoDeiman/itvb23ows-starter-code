<?php

namespace Actor;
use util\{TileColor, Vector2, ActorType};

class Grasshopper extends Actor {
    /* A grasshoper can only move over other insects in a straight line in all six directions.
     */
    public function __construct(TileColor $tileColor, Vector2 $initialPos,)
    {
        parent::__construct($tileColor, $initialPos, ActorType::GrassHopper);
    }
}
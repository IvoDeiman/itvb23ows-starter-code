<?php

namespace util;

enum ActorType: string {
    case QueenBee = "Q";
    case Beetle = "B";
    case GrassHopper = "G";
    case Spider = "S";
    case Ant = "A";
}

enum TileColor: string {
    case Black = "Black";
    case White = "White";
}

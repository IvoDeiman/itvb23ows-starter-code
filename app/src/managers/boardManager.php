<?php

namespace Managers;
use Actor\Actor;
use util\Vector2;

class BoardManager {
    private static $instances = [];

    protected function __construct() {
        self::setBoard($this);
    }

    public static function getInstance() : BoardManager {
        $subclass = static::class;
        if(!isset(self::$instances[$subclass])){
            self::$instances[$subclass] = new static();
        }
        return self::$instances[$subclass];
    }

    public static function setBoard($board) {
        $_SESSION['board'] = $board;
    }

    public static function getBoard() {
        return $_SESSION['board'] ?? null;
    }

    public static function isValidMove(Actor $actor, Vector2 $to): bool {
        $board = self::getBoard();

        unset($_SESSION['ERROR']);

        if(!isset($board[$actor->getPosition()]))
            GameManager::setError("Board position is empty");
        elseif(count($board) && !$actor->hasNeighbour($to, $board))
            GameManager::setError("Board position has no neighbour");
        else {

        }
    }
}

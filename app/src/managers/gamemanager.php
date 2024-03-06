<?php

namespace Managers;
use util\ActorType;

class GameManager {

    protected function __construct() {
    }

    public static function setGameId($gameID): void {
        $_SESSION['game_id'] = $gameID;
    }

    public static function getGameId() {
        return $_SESSION['game_id'] ?? null;
    }

    public static function dealHand(): void {
        $_SESSION['hand'] = [
            0 => [
                ActorType::QueenBee->value => 1,
                ActorType::Beetle->value => 2,
                ActorType::Spider->value =>2,
                ActorType::GrassHopper->value => 3,
                ActorType::Ant->value =>3],
            1 => [
                ActorType::QueenBee->value => 1,
                ActorType::Beetle->value => 2,
                ActorType::Spider->value =>2,
                ActorType::GrassHopper->value => 3,
                ActorType::Ant->value =>3],
        ];
    }

    public static function setError($error): void {
        $_SESSION['error'] = $error;
    }

    public static function getError() {
        return $_SESSION['error'] ?? null;
    }

    public static function printError(): void {
        if(isset($_SESSION['error']))
            echo self::getError();
        unset($_SESSION['ERROR']);
    }
}
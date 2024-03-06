<?php

namespace Managers;
use Actor\Actor;

class ActorManager {
    private static $instances = [];
    private static $actors = array();

    protected function __construct() { }

    public static function getInstance() : ActorManager {
        $subclass = static::class;
        if(!isset(self::$instances[$subclass])) {
            self::$instances[$subclass] = new static();
        }
        return self::$instances[$subclass];
    }

    public static function register(Actor $newActor) : void {
        self::$actors[$newActor->getId()] = $newActor;
        echo "Actor Registered!";
    }

    public static function unregister(Actor $actor): void {
        unset(self::$actors[$actor->getId()]);
        echo "Actor Removed!";
    }

    public static function isRegistered(int $id): bool {
        return array_key_exists($id, self::$actors);
    }

    public static function printRegisteredActors(): void {
        echo "Printing all registered actors: \n";
        foreach (self::$actors as $actor) {
            echo 'actor: ' . $actor . "\n";
        }
    }
}



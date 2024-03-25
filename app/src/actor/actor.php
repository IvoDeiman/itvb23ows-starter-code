<?php
namespace Actor;

use Managers\ActorManager;
use util\{ActorType, TileColor, Vector2};

class Actor {
    protected int $id;
    protected ActorType $actorType;
    protected TileColor $tileColor;
    protected Vector2 $position;

    public function __construct(TileColor $tileColor, Vector2 $initialPos, ActorType $actorType) {
        $this->setId($this->generateId());
        $this->setTileColor($tileColor);
        $this->setPosition($initialPos);
        $this->setActorType($actorType);
        echo "Created new Actor: " . $this->id . " | " . $this->tileColor->value . " : " . $this->actorType->value . "/n";
        ActorManager::register($this);
    }

    public function __destruct() {
        echo "Destroying Actor: " . $this->id . " | " . $this->tileColor->value . " : " . $this->actorType->value . "/n";
        ActorManager::unregister($this);
    }

    public function move(Vector2 $newPosition) {
        $this->setPosition($newPosition);
    }

    private function isNeighbour(Vector2 $currentPos, $boardPos): bool {
        $boardPos = explode(',', $boardPos);
        $comparisonPos = new Vector2($boardPos[0], $boardPos[1]);
        if($currentPos->x == $comparisonPos->x && abs($currentPos->y - $comparisonPos->y) == 1) return true;
        if($currentPos->y == $comparisonPos->y && abs($currentPos->x - $comparisonPos->x) == 1) return true;
        if($currentPos->x + $currentPos->y == $comparisonPos->x + $comparisonPos->y) return true;
        return false;
    }

    public function hasNeighbour(Vector2 $currentPos, $board): bool {
        foreach (array_keys($board) as $boardPos){
            if(isNeighbour($currentPos, $boardPos)) return true;
        }
        return false;
    }

    private function neighboursAreSameTileColor($player, $a, $board): bool {
        foreach($board as $b => $st){
            if(!$st) continue;
            $c = $st[count($st) - 1][0];
            if($c != $player && $this->isNeighbour($a, $b)) return false;
        }
        return true;
    }

    private function generateId(): int {
        $randId = rand(0,100);
        if(ActorManager::isRegistered($randId))
            $this->generateId();
        return $randId;
    }

    public function setId(int $newId): void {
        $this->id = $newId;
    }

    public function getId(): int {
        return $this->id;
    }

    public function setActorType(ActorType $actorType): void {
        $this->actorType = $actorType;
    }

    public function getActorType(): ActorType {
        return $this->actorType;
    }

    public function setTileColor(TileColor $tileColor): void
    {
        $this->tileColor = $tileColor;
    }

    public function getTileColor(): TileColor {
        return $this->tileColor;
    }

    public function setPosition(Vector2 $position): void {
        $this->position = $position;
    }

    public function getPosition(): Vector2 {
        return $this->position;
    }
}
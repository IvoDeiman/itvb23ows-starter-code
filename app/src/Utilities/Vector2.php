<?php

namespace util;

class Vector2 {
    // Shorthand notations for easier navigation of the hexagonal lattice.
    public static Vector2 $zero, $left, $right, $topLeft, $topRight, $bottomLeft, $bottomRight;

    public int $x;
    public int $y;

    public function __construct(int $x, int $y) {
        $this->set($x,$y);

        //TODO: Might be a better way of declaring these?
        self::$zero = new Vector2(0,0);
        self::$left = new Vector2(-1,0);
        self::$right = new Vector2(1,0);
        self::$topLeft = new Vector2(-1,1);
        self::$topRight = new Vector2(0,1);
        self::$bottomLeft = new Vector2(0,-1);
        self::$bottomRight = new Vector2(1,-1);
    }

    public function set(int $x, int $y): void {
        $this->x = $x;
        $this->y = $y;
    }

    public function equals(Vector2 $other): bool {
        return $this->x == $other->x && $this->y == $other->y;
    }

    public function toString(): string {
        return "({$this->x}, {$this->y})";
    }

    public function add(Vector2 $other): void {
        $this->x =+ $other->x;
        $this->y =+ $other->y;
    }
}


<?php declare(strict_types=1);

interface LiftInterface {
    public static function liftCall($floor, $direction);
}

final class Lift implements LiftInterface{

    public static function liftCall($floor, $direction): self {
        return new self($floor);
    }
}
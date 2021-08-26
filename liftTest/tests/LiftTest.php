<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
require_once "/xampp/htdocs/unit-tests-php/liftTest/src/Lift.php";

final class LiftTest extends TestCase {

    public function testCanBeCreatedFromLiftCall(): void {
        $floor = 1;
        $direction = 0;
        $this->assertInstanceOf(
            Lift::class,
            Lift::liftCall($floor,$direction)
        );
    }
}
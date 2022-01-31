<?php


class MathTest extends PHPUnit\Framework\TestCase{

    public function testDouble(){

        $this->assertEquals(6, \Chapitou\Math::double(2), "Le resultat devrait être 4" );
    }
}
<?php


class MathTest extends PHPUnit\Framework\TestCase{

    public function testDouble(){

        $this->assertEquals(4, \Chapitou\Math::double(2), "Le resultat devrait être 4" );
    }
    //Jai changé la valeur 6 en 4 Test reussi
}
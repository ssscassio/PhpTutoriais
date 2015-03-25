<?php

require 'app/Calculadora.php';

class CalculadoraTest extends PHPUnit_Framework_TestCase{

    public function testSoma(){

        $calculadora = new Calculadora();
        $this->assertEquals(5, $calculadora->soma(2,3));
    }
}
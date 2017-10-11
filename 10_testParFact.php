<?php

require_once 'parfact.php';
class ParFactTest extends PHPUnit_Framework_TestCase
{
    function test_create_class() {
        $a = new ParFact();
        $this->assertTrue(is_a($a, 'ParFact'));
    }
    // ...
    public function testPar4() {
        // Assert par 4
        $a = new ParFact();
        $this->assertEquals(true, $a->par(4));
    }

    public function testPar5() {
        // Assert par 5
        $a = new ParFact();
        $this->assertEquals(false, $a->par(5));
    }

    public function testPar7() {
        // Assert par 5
        $a = new ParFact();
        $this->assertEquals(false, $a->par(7));
    }

    /**
     * @dataProvider factorialProvider
     */
    public function testFact($n, $esperado) {
        $a = new ParFact();
        $this->assertEquals($esperado, $a->fact($n));
    }
    public function factorialProvider()
    {
        return array(
            array(0, 1),
            array(1, 1),
            array(2, 2),
            array(3, 6),
            array(4, 24),
            array(5, 120)
        );
    }
}
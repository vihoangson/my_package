<?php
use PHPUnit\Framework\TestCase;
class GreetrTest extends TestCase {
    public function testGreet() {
        $m = new \Simplexi\Greetr\Greetr();
        $this->assertEquals('Hi 123! 1.4 ?', $m->greet('123'));
    }
}

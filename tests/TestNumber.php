<?php

use PHPUnit\Framework\TestCase as TestCase;
class TestNumber extends TestCase {

   function testNumberequals() {
        
    $this->assertEquals(
        14,
        14,
        "should be fourteen I think"
    );
    }
}

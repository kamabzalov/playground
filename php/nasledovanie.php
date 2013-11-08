<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of nasledovanie
 *
 * @author KamAbzalov
 */
class nasledovanie {
    
    public function test(){
        $this->testPrivate();
        $this->testPublic();
    }
    
    public function testPublic(){
        echo "Bar::testPublic\n";
    }
    
    public function testPrivate(){
        echo "Bar::testPrivate\n";
    }
}

class Foo extends nasledovanie {
    
    public function testPublic() {
        echo "Foo:testPublic\r\n";
    }
    
    public function testPrivate() {
        echo "Foo:testPrivate\n";
    }
}

$myFoo = new Foo();
$myFoo->test();
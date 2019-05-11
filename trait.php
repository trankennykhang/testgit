<?php
class Base {
    public function sayHello() {
        echo 'Hello ';
    }
}

trait SayWorld {
    public function sayHello() {
        parent::sayHello();
        echo 'World!';
    }
}
#abc
class MyHelloWorld extends Base {
    use SayWorld;
    public function sayHello1(){
        echo 'kenny';
        $this->sayHello();
        print 1;
    }
}

$o = new MyHelloWorld();
$o->sayHello1();
?>

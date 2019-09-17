<?php
class Base {
    public function sayHello() {    //the base class
        echo 'Hello ';
    }
}

trait SayWorld {
    public function sayHello() {     //definetion of a
        parent::sayHello();
        echo 'World!';
    }
}

class MyHelloWorld extends Base {  //this class extends the base class and also uses the trait
    use SayWorld;
}

$o = new MyHelloWorld();
$o->sayHello();//the trait function overrides the base class function.



trait HelloWorld {
    public function sayHello() {    //this is a trait function
        echo 'Hello World!';
    }
}

class TheWorldIsNotEnough {
    use HelloWorld;
    public function sayHello() { // the current class function can override the trait function
        echo 'Hello Universe!';
    }
}

$o = new TheWorldIsNotEnough();
$o->sayHello();//this will call the current class function as the current class function overrides the trait function 
?>
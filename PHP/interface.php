<?php  
  
interface MyInterfaceName{ 
  
    public function method1(); //interface contains abstract methods
    public function method2(); 
  
} 
  
class MyClassName implements MyInterfaceName{ 
  
    public function method1(){ 
        echo "Method1 Called <br>". "\n"; //class implementing interface has to define the methods of the interface
    } 
  
    public function method2(){ 
        echo "Method2 Called". "\n"; 
    } 
}  
  
$obj = new MyClassName; 
$obj->method1(); 
$obj->method2(); 
  
?>
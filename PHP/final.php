
<?php
 class Base { 
      
    // Final method 
    final function printdata() { 
        echo " Base class final printdata function"; 
    } 
      
    // Non final method 
    function nonfinal() { 
        echo "\n This is nonfinal function of base class"; 
    } 
} 
  
// Class that extend base class 
class Derived extends Base { 
      
    // Inheriting method nonfinal 
    function nonfinal() { 
        echo "\n Derived class non final function"; 
    }  

} 
  
$obj = new Derived; 
$obj->printdata(); 
$obj->nonfinal(); 
// above  printdata function can 
    // not be overridden
//if final is used before class than that class cant be inherited;
//if final key word is used before a variable than that becomes constant; 

?>

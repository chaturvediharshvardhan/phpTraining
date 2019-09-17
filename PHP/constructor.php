																								
<?php
class Bird
{
    
    public $bird_name = "No any birds for now";
    
    public function __construct($bird_name)
    {
        $this->bird_name = $bird_name;
        echo $this->bird_name;
    }
    public function __destruct(){
    	echo "<br> destructor says dead";
    }
}
$bird = new Bird("Sparrow is bird"); // now constructor is called automatically because we have initialized the object or class Bird.
/*echo $bird->bird_name;*/
?>
<!-- Output of above code is :
Sparrow is bird -->
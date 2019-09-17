<?php



class first{

public function display(){

	echo "india";
}
}

class second extends first{

    public function display(){
        echo "ahmedabad";
    }
}

$obj=new second();
$obj->display();


?>
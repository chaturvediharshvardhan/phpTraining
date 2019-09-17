<?php




class shape{

const r=3.14;

 function Call($name,$arg){
	if($name=='area'){

		switch(count($args)){

			case 0:
				return 0;
				case 1:
					return $r*$args[0];
					case 2:
					return $args[0]*$args[1];
		}
	}
}



}
$circle=new shape();
echo $circle->area(5);

$rect=new shape();
echo $rect->area(10,20);




?>
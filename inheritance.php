<?php

// Heritance is the features of oop(Object Oriented Programming)..
//This is the first project example of doing inheritance by me..

class car{

	//Creatng class for car..

	public $speed="80mph";

	public function car_disk_brakes()
	{
		# Created the function as car_disk_brakes() which says the number of disk brakes ...

		echo "This car contains 2 diskbrakes<br>";
	}


	public function auto_windo()
	{
		//Created the function as a auto_windo() which carry the features of automated windows close and open

		echo "This car contains automated open and close windows simply by pressing button<br>";
	}
}

class sports_car extends car{

	//Creating class for sports_car

	public $speed="280mph";

	public function remote_unlock()
	{
		//Created the function as remote_unlock() which have the features of unlucking the car by simply pressing the remote button...

		echo "This car contains the feature of unlocking the car by simply pressing the buttons<br>";
	}
}

class vintage_car extends car{

	//Creating the class for vintage car...

	public $speed="70mph";

	public function adjust_suspension()
	{
		# Created the function as adjust_suspension()

		echo "It can adjust the suspension<br>";
	}

}
echo "<h1><i> Car Features</i></h1><br>";
$car1 = new car();

// Assigining the object as car1 in class car()...
$car1->car_disk_brakes();

$car1->auto_windo();

//Returning the function in $car1 variable



echo "<h1><i>Sports Car Features</i></h1><br>";
$sports1 = new sports_car();

// Assigining the object as sports1 in class sports_car()...

$sports1->car_disk_brakes();

$sports1->auto_windo();

$sports1->remote_unlock();

echo "<h1><i>Vintage Car Features</i></h1><br>";

$vintage1 = new vintage_car();

// Assigining the object as vintage1 in class Vintage_car()...


$vintage1->car_disk_brakes();

$vintage1->auto_windo();

$vintage1->adjust_suspension();

//Returning the function in $vintage1 variable

	

 ?>
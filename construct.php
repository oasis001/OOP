<?php
//It shows the use of construct in php .. And how ease to use it..
//Creating the class named Cell_phone

class Cell_Phone{

	public $Display,$Battery;
	//Assiging the variable as the phone features
	
	public function __construct($disp,$batt)
	{
		# Creating the function __construct which helps to execute without calling the construct()...

		$this->Display=$disp;
		$this->Battery=$batt;

		//Mapping the value through argument to class variable

	}

	public function Feature_Phone()
	{
		# Creating the function Feature_Phone() to get output..

		echo "<i>This phone has the features of <b>Display</b> = </i>".$this->Display." <i>And the <b>battery power</b> = </i> ".$this->Battery."<br>";
	}
}

echo "<h1>Iphone</h1><br>";

$iphone = new Cell_Phone("Touch","3200mah");

// Creating the object 

$iphone->Feature_Phone();


echo "<h1>Samsung</h1><br>";

//Calling the function Show_value() to get output

$samsung = new Cell_Phone(" keypad","4000mah");

// Creating the object 

$samsung->Feature_Phone();

//Calling the function Show_value() to get output

 ?>
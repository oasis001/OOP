<?php

//Creating class for fan
class fan{

	public function fan_speed()
	{
		# Declaring fan_speed()

		echo "<h4><i>It's speed is 20mph</i></h4>";
	}
}

class wall_fan extends fan {

	//Creating wall_fan class and granting the access of class fan()...
	public function fan_speed()
	{
		# Declaring fan_speed()

		echo "<h4><i>It's speed is 30mph</i></h4>";
	}
}

$fan1 = new fan();

$fan2 = new wall_fan();

//Creating the objects

echo "<h1>Fan Class</h1><br>";

$fan1->fan_speed();

echo "<h1>Wall Fan Class</h1><br>";

$fan2->fan_speed();

//Calling the function...



?>
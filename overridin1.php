<?php

// Calling both start_up() from one object using the keyword self and parent.
class car{

	public function start_up()
	{
		# code...

		echo "<h2>The car has started.</h2>";
	}

	public function callin_fun()
	{

		self::start_up();
	}
}

class sports_car extends car {


	public function start_up()
	{
		# code...

		echo "<h2>The sports car has started</h2>";
	}

	public function call_the_fun()
	{

		parent::callin_fun();
	}
}

$sc1 = new sports_car();

$sc1->start_up();

$sc1->call_the_fun();

 ?>
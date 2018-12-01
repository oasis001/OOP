<?php

//This class is for form validation

class form_validation{

//Class is made for form validation 

//Assiging variable in the class

	public $username,$password,$email;


	public function getdata($user,$pass,$ema)
	
	{
		# code...Function to getthe userinput from user

			$this->username=$user;

			$this->password=$pass;

			$this->email=$ema;


	}

	public function showdata()
	{

		//This function helps to show the data.. 


		echo "Hey ".$this->username." you logged in successfully and your password is ".$this->password;
	}



}

//Now assigining the objects

$user1 = new form_validation();

//Passing the userinput into class

$user1->getdata("Aashish","aasis123","aashish@gmail.com");

//executing the data simply calling showdata() function...

$user1->showdata();


$user2 = new form_validation();

$user2->getdata("ujwal","ujwal123","ujwal@gmail.com");

//executing the data simply calling showdata() function...

$user2->showdata();

?>
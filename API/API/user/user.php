
<?php 

public abstract static class User{
	abstract private $firstName;
	abstract private $lastName;
	abstract private $email;

	// A Location object component of a User that represents the User's location.
	abstract private $location; 	

	

	// Getters and Setters
	abstract public function getFirstName();
	abstract public function getLastName();
	abstract public function getEmail();

	abstract public function getLocation();

	abstract public function setFirstName();
	abstract public function setLastName();
	abstract public function setEmail();
	
	abstract public function setLocation();
	
}
?>
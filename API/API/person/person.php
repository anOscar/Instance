<?php

// - USER
// 		Relationships

// 		Traits/Attributes/Characteristics
// 			first name 	*
// 			last name 	*
// 			email 		*
// 			phone number
// 			age 
// 			sex
public class Person extends User{

	const USER_TYPE = 1;

	private $firstName;
	private $lastName;
	private $email;
	private $phoneNumber;
	private $age;
	private $sex;
	private $location;


	// setters and getters
	public function getFirstName(){ 
		if($this->firstName == NULL){
			return false;
		}else{
			return $this->firstName
		}

 	}
	public function getLastName(){ 
		if($this->lastName == NULL){
			return false;
		}else{
			return $this->lastName
		}

	}
	public function getEmail(){ 
		if($this->email == NULL){
			return false;
		}else{
			return $this->email
		}

	 }
	public function getPhoneNumber(){ 
		if($this->phoneNumber == NULL){
			return false;
		}else{
			return $this->phoneNumber;
		}

	}

	public function getAge(){
		if($this->age == NULL){
			return false;
		}else{
			return $this->age;
		}

	 }

	public function getSex(){ 
		if($this->sex == NULL){
			return false;
		}else{
			return $this->sex;
		}
	}

	public function setFirstName($firstName){
		$this->firstName = $firstName; 
	}

	public $setLasstName($lastName){
		$this->lastName = $lastName;
	}

	public function setPhoneNumber($phoneNumber){
		$this->phoneNumber = $phoneNumber;

	}
	
	public function setAge($age){
		$this->age = $age;
		
		//SEX = 0 --> Sex is female
		//SEX = 1 --> Sex is male
	public function setSex($sex){
		$this->sex = $sex;
	}


	}


}

?>
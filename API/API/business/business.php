<?php

//  BUSINESS
// 		Relationships
// 			- is a business and its location
// 		Traits/Attributes/Characteristics
// 		name 	*
// 		owner 	*
// 		service classification
// 		address of business residence 	*

// A Business is a 

public class Business{

	// An Integer classification of a bussiness
	// e.g., 	1 => grocery store
	//		 	2 => convenience store
	private const BUSINESS_TYPE; 

	abstract private $businessName;
	abstract private $owner; 		// A foreign key referenece to a user id 
	abstract private $location;

	//http://php.net/manual/en/language.oop5.decon.php
	public function __construct(){
		$args = func_get_args();
		$argCount = func_num_args();

		//http://php.net/manual/en/language.oop5.decon.php
        if (method_exists($this,$f='__construct'.$argCount)) {
        	// Check if this particular instance has a method that matches
        	// the constructor based on the signature used i.e., the arguments passed
            call_user_func_array(array($this,$f),$args); 		
        } 
	}

	public function __construct1($businessName, $owner, $location){
		$this->businessName = $businessName;
		$this->owner = $owner;
		$this->location = $location;
	}

	public function getBusinessName(){
		if($this->businessName == NULL){
			return false;
		}else{
			return $this->businessName;
		}
	}

	public function getOwner(){
		if($this->owner == NULL){
			return false;
		}else{
			return $this->owner;

		}
	}

	abstract public function getLocation(){
		if($this->location == NULL){
			return false;
		}else{
			return $this->location;
		}
	}

	public function setBusinessName($businessName){
		$this->businessName = $businessName;
	}

	public function setOwner($owner){
		$this->owner = $owner;
	}

}

?>



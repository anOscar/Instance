<?php
//-OWNER
// 	Relationships
// 		- inherits from a user --> "is a user"

// 		Traits/Attributes/Characteristics
// 		address of personal residence 	*
// 		phone number 					*

public class Owner extends User{

	abstract private $homeAdress;	// Current place of residence of the Owner

	const USER_TYPE = 2; 			// An Integer classification/representation of a User

	private private $user;	//


	private function getPersonalResidence(){
		if($this->user == NULL){
			return false;
		}else{
			return $this->user.getLocation();
		}
	}


	// setters and getters 

	public function getPersonalResidence(){
		$homeAdress = $this->user.getHomeAddress();
		if($homeAdress == NULL){
			return false;

		}else{
			return $homeAdress();
		}
	}


}
?>
<?php



// A Partner can be either a Business or a Person.

public class Partner extends User{

	abstract private $partnerID; 	// A foreign key reference to a user id
	abstract private $partnerType; // Idea: if a partner has more than 1 type that describes him/her use bit mask


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

	public function __construct1($partnerID){
		$this->partnerID = $partnerID;
		$this->partnerType = NULL;
		return $this;
	}

	public function __construct2($partnerID, $partnerType){
		$this->partnerID = $partnerID;
		$this->partnerType = $partnerType;
		return $this;
	}

	abstract private function getPartnerType(){
		if($this->getPartnerType == NULL){
			return false;
		}else{
			return $this->partnerType;
		}
	}

	// returns a set of strings that describe a partner. 
	// for instance: 
	//				{"youtube personality", "business", "twitch personality"}
	abstract private function getPartnerArrayDescription(){}

	abstract private function setPartnerType($type){
		$this->type = $type;
	}
}
?>
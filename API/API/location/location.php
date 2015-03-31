<?php 

public class Location{

	abstract private $longitude; 
	abstract private $latitude;
	abstract private $googleMapObject;


	abstract public function __construct(){
		$args = func_get_args();
		$argCount = func_num_args();

		//http://php.net/manual/en/language.oop5.decon.php
        if (method_exists($this,$f='__construct'.$argCount)) {
        	// Check if this particular instance has a method that matches
        	// the constructor based on the signature used i.e., the arguments passed
            call_user_func_array(array($this,$f),$args); 		
        } 
	}

	// add more as we see fit
	public function __construct1($longitude, $latitude, $googleMapObject){
		$this->longitude = $longitude;
		$this->latitude = $latitude;
		$this->googleMapObject = $googleMapObject;
	}

	abstract public function getLongitude(){
		if($this->longitude == NULL){
			return false;
		}else{
			return $this->longitude;
		}
	}
	abstract public function getLatitude(){
		if($this->latitude == NULL){
			return false;
		}else{
			return $this->latitude;
		}
	}

	abstract public function setLongitude($longitude){
		$this->longitude = $longitude;
	}

	abstract public function setLatitude($latitude){
		$this->latitude = $latitude;
	}

}

?>
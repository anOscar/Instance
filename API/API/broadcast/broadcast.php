<?php
// -BROADCAST
// 	Relationships
// 		- a piece of content broadcasted by a user
// 			e.g., text message, video, picture, xbox game clip, 
// 			   	  tabletop boardgames, alerts (traffic conditions/description)
// 	Traits/Attributes/Characteristics
// 		content
// 		time stamp
// 		date stamp
// 		broadcaster id (e.g., userid/businessid/ownerid ect)
// 		tags/keywords (used for filtering/classifying content that is broadcasted)

	public abstract class Broadcast{
 
		abstract private $contentID;
		abstract private $timeStamp;
		abstract private $dateStamp;
		
		abstract public function getContent(){
			if($this->contentID == NULL){
				return false;
			}else{
				return $this->contentID;
			}
		}
		abstract public function getTimeStamp(){
			if($this->timeStamp == NULL){
				return false;

			}else{
				return $this->timeStamp;
			}
		}
		abstract public function getDateStamp(){
			if($this->dateStamp == NULL){
				return false;
			}else{
				return $this->dateStamp;
			}
		}

		abstract public function setContent($content){
			if($this->content == NULL){
				return false;
			}else{
				return $this->content;
			}
		}
		abstract public function setTimeStamp(){
			if($this->timeStamp == NULL){
				return false;
			}else{
				return $this->timeStamp;
			}
		}
		abstract public function setDateStamp($dateStamp){
			if($this->dateStamp == NULL){
				return false;
			}else{
				return $this->dateStamp;
			}
		}

	}
?>
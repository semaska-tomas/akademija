<?php 

namespace akademija;

class Bid{
	protected $bidder;
	protected $value;
	protected $date;
	
	public function __construct(User $bidder, $value, $date){
		$this->bidder = $bidder;
		$this->value = $value;
		$this->date = $date;
	}
	
	public function getBidder(){
		return $this->bidder;
	}
	
	public function getBidderName(){
		return $this->bidder->getName();
	}
	
	public function setBidder($newBidder){
		$this->bidder = $newBidder;
	}
	
	public function getValue(){
		return $this->value;
	}
	
	public function setValue($newValue){
		$this->value = $newValue;
	}
	
	public function getDate(){
		return $this->date;
	}
	
	public function setDate($newDate){
		$this->date = $newDate;
	}
	
	//get date from string as timestamp to compare dates more precisely
	public function getDateAsTimestamp(){
		$timestamp = strtotime($this->date);
		return $timestamp;
	}
}
<?php 

class Article{
	protected $title; 
	protected $price;
	protected $anotation;
	protected $date;
	protected $state;
	protected $bids = array();
	
	public function __construct($title, $price, $anotation, $date){
		$this->title = $title;
		$this->price = $price;
		$this->anotation = $anotation;
		$this->date = $date;
		$this->state = true;
	}
	
	public function getTitle(){
		return $this->title;
	}
	
	public function setTitle($newTitle){
		$this->title = $newTitle;
	}
	
	public function getPrice(){
		return $this->price;
	}
	
	public function setPrice($newPrice){
		$this->price = $newPrice;
	}
	
	public function getDate(){
		return $this->date;
	}
	
	//get date from string as timestamp for precision
	public function getDateAsTimestamp(){
		$timestamp = strtotime($this->date);
		return $timestamp;
	}
	
	public function setDate($newDate){
		$this->date = $newDate;
	}
	
	public function getAnotation(){
		return $this->anotation;
	}
	
	public function setAnotation($newAnotation){
		$this->anotation = $newAnotation;
	}
	
	public function addBid(Bid $bid){
		if ($this->state){
			$this->bids[] = $bid;
		}else{
			//auction ended, throw exception or send message to user
		}
	}
	
	public function getBids(){
		return $this->bids;
	}
	
	//custom compare function for sorting by date, descending order
	public function compareByDate($a, $b) {
		if($a->getDateAsTimestamp()==$b->getDateAsTimestamp()) return 0;
		return $a->getDateAsTimestamp() < $b->getDateAsTimestamp()?1:-1;
	}
	
	//sort bids by date
	public function sortBids(){
		echo "sort";
		usort($this->bids, array($this, "compareByDate")); 
		return $this->bids;
	}
	
	public function changeState($state){
		$this->state = $state;
	}

}
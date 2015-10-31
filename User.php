<?php 

class User{
	protected $name;
	protected $mail;
	protected $gender;
	
	public function __construct($name, $mail, $gender){
		$this->name = $name;
		$this->mail = $mail;
		$this->gender = $gender;
	}
	
	public function getName(){
		return $this->name;
	}
	
	public function setName($newName){
		$this->name = $newName;
	}
	
	public function getMail(){
		return $this->mail;
	}
	
	public function setMail($newMail){
		$this->mail = $newMail;
	}
	
	public function getGender(){
		return $this->gender;
	}
	
	public function setGender($newGender){
		$this->gender = $newGender;
	}
	
}
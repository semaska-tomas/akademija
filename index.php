<?php

include_once "User.php";
include_once "Article.php";
include_once "Bid.php";

//fill in data
$user1 = new User("Bert Rose", "rose@phoroneus.com", "female");
$user2 = new User("Rush Tommy", "rush@chronos.com", "male");

$article = new Article("Gold Watch", 10, "New with tags: A brand-new, unused, and unworn item (including handmade items) in the original packaging
    (such as the original box or bag) and/or with the original tags attached", '2015-10-26 15:45');

$bid1 = new Bid($user1, 12, '2015-10-25 12:22');
$bid2 = new Bid($user2, 13, '2014-10-26 9:13');
$bid3 = new Bid($user1, 15.50, '2015-10-26 15:00');

$article->addBid($bid1);
$article->addBid($bid2);
$article->addBid($bid3);
$bids = $article->sortBids();

//create empty variables for checking if auction ended
$sold = '';
$i = 0;
	
//sort and print data	
echo "<dl>";
echo "<dt>".$article->getTitle()."</dt>
    <dd><p>".$article->getAnotation()."</p>
    <p>Price: ".$article->getPrice()."&euro;</p>
    <p>Ended ".$article->getDate()."</p>
    <p><ul>";
	foreach ($bids as $bid) {
		
		//check if auction ended
		if ($article->getDateAsTimestamp() < time() && $i == 0){
			$sold = 'Sold';
			$i = 1;
		}else{
			$sold = '';
		}
		
		echo "- ".$bid->getBidder()->getName()."; ".$bid->getValue()."€; ".$bid->getDate()."; ".$sold."<br>";
	}  
echo "</ul></p>
    </dd>";
	
//fill in data
$user3 = new User("Miguel Howard", "howard@aurigae.com", "male");

$article2 = new Article("Linen Jacket", 135, "It has a smooth chalk stripe pattern which gives the suit a refined look. The 6 buttons of his double
    breasted jacket are all buttoned up with the exception of one, it adds a casual touch to an elegant look.<br>
    The jacket is the same length all around, it has vents at either side, there's a pocket on either side and there's
    a breast pocket which contains a stylish pocket square.", "2015-10-29 12:00");

$bid4 = new Bid($user3, 140, '2015-10-25 12:22');
$bid5 = new Bid($user2, 155, '2014-10-29 9:13');

$article2->addBid($bid4);
$article2->addBid($bid5);

$bids2 = $article2->sortBids();

//reset variables for checking if auction ended
$sold = '';
$i = 0;

//sort and print data	
echo "<dl>";
echo "<dt>".$article2->getTitle()."</dt>
    <dd><p>".$article2->getAnotation()."</p>
    <p>Price: ".$article2->getPrice()."&euro;</p>
    <p>Ended ".$article2->getDate()."</p>
    <p><ul>";
	foreach ($bids2 as $bid) {
		
		//check if auction ended
		if ($article2->getDateAsTimestamp() < time() && $i == 0){
			$sold = 'Sold';
			$i = 1;
		}else{
			$sold = '';
		}
		
		echo "- ". $bid->getBidder()->getName()."; ".$bid->getValue()."€; ".$bid->getDate()."; ".$sold."<br>";
	}  
echo "</ul></p>
    </dd>";

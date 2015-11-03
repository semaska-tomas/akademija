<?php

namespace akademija;

include_once "User.php";
include_once "Article.php";
include_once "Bid.php";

$articles = [];

//article - 1 
$user1 = new User("Bert Rose", "rose@phoroneus.com", "female");
$user2 = new User("Rush Tommy", "rush@chronos.com", "male");

$article1 = new Article("Gold Watch", 10, "New with tags: A brand-new, unused, and unworn item (including handmade items) in the original packaging
    (such as the original box or bag) and/or with the original tags attached", '2015-10-26 15:45');

$bid1 = new Bid($user1, 12, '2015-10-25 12:22');
$bid2 = new Bid($user2, 13, '2014-10-26 9:13');
$bid3 = new Bid($user1, 15.50, '2015-10-26 15:00');

$article1->addBid($bid1);
$article1->addBid($bid2);
$article1->addBid($bid3);

//article - 2 
$user3 = new User("Miguel Howard", "howard@aurigae.com", "male");

$article2 = new Article("Linen Jacket", 135, "It has a smooth chalk stripe pattern which gives the suit a refined look. The 6 buttons of his double
    breasted jacket are all buttoned up with the exception of one, it adds a casual touch to an elegant look.<br>
    The jacket is the same length all around, it has vents at either side, there's a pocket on either side and there's
    a breast pocket which contains a stylish pocket square.", "2015-10-29 12:00");

$bid4 = new Bid($user3, 140, '2015-10-25 12:22');
$bid5 = new Bid($user2, 155, '2014-10-29 9:13');

$article2->addBid($bid4);
$article2->addBid($bid5);

//added articles - 1
$article3 = new Article("Linen Pants", 215, "Extra line much pants such wow.", "2015-10-30 19:00");

$bid6 = new Bid($user1, 280, '2015-10-25 11:33');
$bid7 = new Bid($user2, 270, '2014-10-30 6:15');

$article3->addBid($bid6);
$article3->addBid($bid7);

//added articles - 2
$article4 = new Article("Hulk's Pants", 235, "Indestructible pants for every occasion. ", "2015-11-02 12:00");

$bid8 = new Bid($user3, 750, '2015-11-01 12:22');
$bid9 = new Bid($user1, 600, '2014-11-02 9:13');

$article4->addBid($bid8);
$article4->addBid($bid9);

//added articles - 3
$article5 = new Article("Batman's costume for helloween", 250, "MOst unique costume for helloween.", "2015-10-29 12:00");

$bid10 = new Bid($user2, 521, '2015-10-25 12:22');
$bid11 = new Bid($user3, 250, '2014-10-29 10:13');
$bid12 = new Bid($user2, 155, '2014-10-29 9:13');

$article5->addBid($bid10);
$article5->addBid($bid11);
$article5->addBid($bid12);
array_push($articles, $article1, $article2, $article3, $article4, $article5);

//reset variables for checking if auction ended

foreach ($articles as $article) {	
	$bids = $article->sortBids();
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
	</dd></dl>";
}

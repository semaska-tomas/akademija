<?php

$name1 = "Bert Rose";
$mail1 = "rose@phoroneus.com";
$gender1 = "female";

$name2 = "Rush Tommy";
$mail2 = "rush@chronos.com";
$gender2 = "male";

$article = "Gold Watch";
$price = 10;
$anotation = "New with tags: A brand-new, unused, and unworn item (including handmade items) in the original packaging
    (such as the original box or bag) and/or with the original tags attached";
$date = '2015-10-26 15:45';

$bid1 = "Rose";
$value1 = 12;
$date1 = '2015-10-25 12:22';

$bid2 = "Rush";
$value2 = 13;
$date2 = '2014-10-26 9:13';

$bid3 = "Bert";
$value3 = 15.50;
$date3 = '2015-10-26 15:00';


echo "<dl>";
echo "<dt>{$article}</dt>
    <dd><p>{$anotation}</p>
    <p>Price: {$price}&euro;</p>
    <p>Ended {$date}</p>
    <p><ul>
        <li>{$bid3}; {$value3}&euro;; {$date3}; Sold;</li>
        <li>{$bid2}; {$value2}&euro;; {$date2}</li>
        <li>{$bid1}; {$value1}&euro;; {$date1}</li>
    </ul></p>
    </dd>";


$name1 = "Miguel Howard";
$mail1 = "howard@aurigae.com";
$gender1 = "male";

$article = "Linen Jacket";
$anotation = "It has a smooth chalk stripe pattern which gives the suit a refined look. The 6 buttons of his double
    breasted jacket are all buttoned up with the exception of one, it adds a casual touch to an elegant look.<br>
    The jacket is the same length all around, it has vents at either side, there's a pocket on either side and there's
    a breast pocket which contains a stylish pocket square.";
$price = 135;
$time = "2015-10-29 12:00";

$bid1 = "Miguel";
$value1 = 140;
$date1 = '2015-10-28 13:58';

$bid2 = "Rush";
$value2 = 155;
$date2 = '2014-10-29 9:13';

echo "<dt>{$article}</dt>
    <dd><p>{$anotation}</p>
    <p>Price: {$price}&euro;</p>
    <p>Ends {$time}</p>
    <p><ul>
        <li>{$bid2}; {$value2}&euro;; {$date2}</li>
        <li>{$bid1}; {$value1}&euro;; {$date1}</li>
    </ul></p>
    </dd>";
echo "</dl>";

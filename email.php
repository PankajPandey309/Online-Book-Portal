<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Second Hand Book|welcome</title>
	<link rel="stylesheet" href="./css/styles.css">
  </head>
  <body>
    <header>
	   <div class="container">
	    <div id="branding">
		  <h1>Second Hand Book</h1>
		</div>
		<nav>
		       <ul>
		         <li class="curent"><a href="index.php">Home</a></li>
			     <li><a href="sell.php">Sell Books</a></li>
				<li><a href="booksold.php">Buy Books</a></li>
			    
			     <li><a href="contact.html">Contact Us</a></li>
				 <li><a href="shoppingcart"><img src="./image/shoppingcart.png" alt="shoppingcart" style="width:60px;height:60px;padding-top:0;"></a></li>
		       </ul>
		 </nav>
		</div>
	</header>
	
	
	   <section id="showcase">
	     <div class="container">
		    <h1>Online Second Hand Book Portal</h1>
	    </div>
	   </section>
		<section id="newsletter">
	      <div class="container">
		    <h3>Mail Confirmation Sent</h3>
		  </div>
	    </section>
<?php
//the message
$db = mysqli_connect('localhost', 'root', '', 'profile');
	   $i=0;
	   $query = "SELECT * FROM userprofile WHERE username='17bce1177'";
	   $result = mysqli_query($db, $query);
	   $query1 = "SELECT * FROM sellbook WHERE isbn=1345";
	   $result1 = mysqli_query($db, $query1);
$row = mysqli_fetch_array($result);
$row1 = mysqli_fetch_array($result1);
$msg1="Congragulations".$row['username']."on the purchase of the book".$row1['bookname']."by".$row1['author']." ISBN:".$row1['isbn'].".Contact your seller Pankaj ,Contact number:".$row['contactno']." for delivery.";

				
			
	   
	   
	   

//send email
mail("pankajjrp6@gmail.com","Order receipt",$msg1);
?>

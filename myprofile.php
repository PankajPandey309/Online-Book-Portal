<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Your Profile</title>
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
				<li><a href="logout.php">Contact Us</a></li>
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
		    <h3>User Profile</h3>
		  </div>
	    </section>

	<?php
	   $db = mysqli_connect('localhost', 'root', '', 'profile');
	   $isbn_disp='17bce1177';
	   $query = "SELECT * FROM userprofile WHERE username='$isbn_disp'";
	   $result = mysqli_query($db, $query);
	   echo "<table><tr><th>Username</th><th>email</th><th>contact number</th></tr>";
	   while($row = mysqli_fetch_array($result)){
		      echo '<tr>';
				echo '<td>'.$row['username']."</td>";
				echo ' <td>'.$row['email']."</td>";
				echo ' <td>'.$row['contactno']."</td>";
				
			echo '</tr>';
	   
	   
	   }echo"</table>";?>
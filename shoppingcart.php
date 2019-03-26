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
			     <li><a href="register.php">Sign Up</a></li>
				
				 <li><a href="login.php">Sign In</a></li>
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
		    <h3>Book Cart</h3>
		  </div>
	    </section>
		<?php
	   $db = mysqli_connect('localhost', 'root', '', 'profile');
	
    
   	
		

	   $query = "SELECT * FROM sellbook WHERE isbn='1345'";
	   $result = mysqli_query($db, $query);
	   echo "<table><tr><th>Book Name</th><th>Author</th><th>Seller</th><th>Publication</th><th>ISBN</th><th>Category</th></tr>";
	   while($row = mysqli_fetch_array($result)){
		      echo '<tr>';
				echo '<td>'.$row['bookname']."</td>";
				echo ' <td>'.$row['author']."</td>";
				echo ' <td>'.$row['seller']."</td>";
				echo ' <td>'.$row['publication']."</td>";
				echo ' <td>'.$row['isbn']."</td>";
				echo ' <td>'.$row['booktype']."</td>";
				
			echo '</tr>';
	   
	   
	   }echo"</table>";
		
	   echo ' <td> <a href="email.php" style="position:relative;background-color:lightblue" />Generate Receipt</a></td>';
		   ?>
       <footer>
	     <p>Second Hand Books,copyright &copy; 2019</p>
	   </footer>
</body>
</html>
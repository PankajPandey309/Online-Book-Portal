<?php include('server.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Second Hand Book|welcome</title>
	<link rel="stylesheet" href="./css/stylereg.css">
  </head>
  <body>
    <header>
	   <div class="container">
	    <div id="branding">
		  <h1>Second Hand Book</h1>
		</div>
		<nav>
		       <ul>
		         <li class="curent"><a href="index.html">Home</a></li>
			     <li><a href="sell.php">Sell Books</a></li>
			     <li><a href="booksold.php">Buy Books</a></li>
			<li><a href="register.php">Sign Up</a></li>
				 <li><a href="login.php">Sign In</a></li>
			     <li><a href="contact.html">Contact Us</a></li>
				 <li><a href="shoppingcart.php"><img src="./image/shoppingcart.png" alt="shoppingcart" style="width:60px;height:60px;padding-top:0;"></a></li>
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
		    <h3>Sign In</h3>
		  </div>
	    </section>
	   <div class="header">
  	<h2>Sign In</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username">
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user" onClick="index.php">Sign In</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>

       <footer>
	     <p>Second Hand Books,copyright &copy; 2018</p>
	   </footer>
  </body>
</html>
<?php include('server.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Create Account</title>
	<link rel="stylesheet" href="./css/stylereg.css">
	<script>
	function verify()
	{
	if(/^\w+(\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myform.email.value));
		{
		return true;
		}
	else{
		alert('Invalid email');
		}
	}
</script>
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
			     <li><a href="sell.html">Sell Books</a></li>
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
		    <h3>Sign Up</h3>
		  </div>
		  </section>
	    <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php" name="myform">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" onchange="verify()" value="<?php echo $email; ?>">
  	</div>
	<div class="input-group">
  	  <label>Contact No</label>
  	  <input type="number" name="contactno" value="<?php echo $contact; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Sign Up</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>

       <footer>
	     <p>Second Hand Books,copyright &copy; 2018</p>
	   </footer>
  </body>
</html>
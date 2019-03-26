<?php include('sellserver.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Sell Book</title>
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
		         <li class="curent"><a href="index.php">Home</a></li>
			     <li><a href="sell.php">Sell Books</a></li>
			     <li><a href="booksold.php">Buy Books</a></li>
				
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
		    <h3>Sell Book</h3>
		  </div>
		  </section>
	    <div class="header">
  	<h2>Book Detail</h2>
  </div>
	
  <form method="post" action="sell.php" enctype="multipart/form-data">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Book Name</label>
  	  <input type="text" name="bookname" value="<?php echo $bookname; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Author Name</label>
  	  <input type="text" name="author" value="<?php echo $author; ?>">
  	</div>
	<div class="input-group">
  	  <label>Publication</label>
  	  <input type="text" name="publication" value="<?php echo $publication; ?>">
  	</div>
  	<div class="input-group">
  	  <label>ISBN</label>
  	  <input type="text" name="isbn" value="<?php echo $isbn; ?>">
  	</div>
	<div class="input-group">
  	  <label>Seller Name</label>
  	  <input type="text" name="seller" value="<?php echo $seller; ?>">
  	</div>
  	<div style="color:#ffffff">
  	  <label>Book Type</label></br>
	  
  	  <input type="radio" name="booktype" <?php if (isset($booktype) && $booktype=="primarybook") echo "checked";?> value="primarybook">Primary Level Books</br>
	  <input type="radio" name="booktype" <?php if (isset($booktype) && $booktype=="engineering") echo "checked";?> value="engineering">Engineering</br>
	  <input type="radio" name="booktype" <?php if (isset($booktype) && $booktype=="medical") echo "checked";?> value="medical">Medical</br>
	  <input type="radio" name="booktype" <?php if (isset($booktype) && $booktype=="arts") echo "checked";?> value="arts">Arts</br>
	  <input type="radio" name="booktype" <?php if (isset($booktype) && $booktype=="commerce") echo "checked";?> value="commerce">Commerce</br>
	  <input type="radio" name="booktype" <?php if (isset($booktype) && $booktype=="literatire") echo "checked";?> value="literature">Literature</br>
	  
  	</div>

  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Sell Book</button>
  	</div>
  </form>

       <footer>
	     <p>Second Hand Books,copyright &copy; 2018</p>
	   </footer>
  </body>
</html>

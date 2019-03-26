<?php
session_start();

// initializing variables
$bookname = "";
$author  = "";
$publication ="";
$isbn = "";
$booktype = "";
$seller="";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'profile');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $bookname = mysqli_real_escape_string($db, $_POST['bookname']);
  $author = mysqli_real_escape_string($db, $_POST['author']);
  $publication = mysqli_real_escape_string($db, $_POST['publication']);
  $isbn = mysqli_real_escape_string($db, $_POST['isbn']);
  $booktype = mysqli_real_escape_string($db, $_POST['booktype']);
  $seller = mysqli_real_escape_string($db, $_POST['seller']);//*******doubt 
 
  
  

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($bookname)) { array_push($errors, "Bookname is required"); }
  if (empty($author)) { array_push($errors, "Author is required"); }
  if (empty($publication)) { array_push($errors, "Publication is required"); }
  if (empty($isbn)) { array_push($errors, "ISBN is required"); }
  //for booktype*******************

  
  	$query = "INSERT INTO sellbook ( bookname, author, publication, isbn, booktype,seller) 
  			  VALUES( '$bookname', '$author', '$publication', '$isbn', '$booktype','$seller')";
  	mysqli_query($db,$query);
	
  	header('location:booksold.php');
  }

?>
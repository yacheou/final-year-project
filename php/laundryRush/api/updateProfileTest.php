<?php 

include('manageProfile.php');

?>

<html>

<title>This is a test webpage for User Registration</title>

 <form method = "POST" action="updateProfileTest.php"> 
<!--<form method = "POST" action="registerTest.php"> -->

<p>SP username:</p>

<br>

<input type="text" name="sp_username">

<br>

<p>Name:</p>

<br>

<input type="text" name="username">

<br>

<p>Email:</p>

<br>

<input type="text" name="email">

<br>



<br><br>

<input type="Submit" value="Submit">

</form>

</html>
<?php

include('userRegistration.php');

?>

<html>

<title>This is a test webpage for User Registration</title>

 <form method = "POST" action="userRegistration.php"> 
<!--<form method = "POST" action="registerTest.php"> -->

<p>Name:</p>

<br>

<input type="text" name="username">

<br>

<p>Email:</p>

<br>

<input type="text" name="email">

<br>

<p>Password:</p>

<br>

<input type="text" name="password">

<br><br>

<input type="Submit" value="Submit">

</form>

</html>
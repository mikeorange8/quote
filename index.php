<?php
	session_start();
	error_reporting( E_ERROR );
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="img/q.png">
	<meta charset="utf-8">
	<title>Quotes</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
																	<!-- nav icons -->
	<ul class="headicons tab-nav">
		<li class="active">
			<a href="#tab01" class="list"></a>
		</li>
		<li>
			<a href="#tab02" class="add"></a>
		</li>
		<li>
			<a href="#tab03" class="login"></a>
		</li>
	</ul>

																	<!-- register form -->
<div class="regform tab">
	<form  name="registration" method="post" action="register.php">
	  <div class="form-group">
	    <input  class="form-control" pattern=".{6,}"   required title="6 characters minimum"  placeholder="Login and password have to " name="login">
	  </div>
	  <div class="form-group">
	    <input type="password" class="form-control" pattern=".{6,}"   required title="6 characters minimum" placeholder="contain 6 or more letters" name="pass">
	  </div>
	  <button id="regbtn" type="submit" class="btn btn-default">Register</button>
	</form>
</div>


																	<!-- Login/logout form -->
<?php
	if ($_SESSION['user_id']=='')
	{
?>

<div class="logform tab" id="tab03"> 								<!-- login -->
	<form class="form-block" name="log_in" method="post" action="login.php">
	  <div class="form-group">
	    <label class="sr-only" for="exampleInputEmail3">Email address</label>
	    <input class="form-control" name="login" id="log" placeholder="Login">
	  </div>

	  <div class="form-group">
	    <label class="sr-only" for="exampleInputPassword3">Password</label>
	    <input type="password" name="pass" class="form-control" id="pas" placeholder="Password">
	  </div>
	  <button name="logbtn" id="logbtn" type="submit" class="btn btn-default">Login</button>
	  <br>
	</form>
	<button id="regbtn" type="submit" class="btn btn-default">Register</button>
</div>

<?php	

	}
else  
{
?>
 	<div class="logform tab" id="tab03">                            <!-- logout -->
	<form method="post" action="login.php">
	  <button name="logoutbtn" id="logbtn" type="submit" class="btn btn-default">Logout</button>
	</form>
	</div>
<?php
}
?>

																<!-- add quote -->
<div class="addquote content tab" id="tab02">
	<form method="post" action="add.php">	
		<textarea class="form-control" rows="6" name="quotation" placeholder=<?php 
		if ($_SESSION['user_id']!= 0)
			echo "'Add your quote here, ".$_SESSION['user_name']."'";
		else echo "'You cant post quotes.'";?>></textarea>
		<input type="text" class="form-control" id="exampleInputName2" placeholder="quote's author" name="author">
		<footer class="text-center">
			<?php if($_SESSION['user_id']!= '') {?><button id = "addbtn" type="submit" name="addbtn" class="btn btn-danger">Add</button>
			<?php } else {echo "<b> You have to login before adding quotes</b>";} ?>
		</footer>
	</form>
</div>

																<!-- content tab -->
<div class="content tab" id="tab01">
	<div class="quotes">
	</div>	
	<div class="page">
		   <footer class="text-center">
		   	 <button id="pgbtn" onclick="showmore()" class="btn btn-danger" name="more">Show more</button>
		   </footer>
	</div>
</div>



<script src="js/jquery.js"></script>
<script type="text/javascript" src="http://scriptjava.net/source/scriptjava/scriptjava.js"></script>
<script type="text/javascript" src="js/javascript.js"></script>


 </body>
</html>
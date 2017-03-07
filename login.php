<?php
error_reporting( E_ERROR );
session_start();
$link = mysqli_connect("localhost", "root", "usbw", "cita");
			mysql_query ("SET CHARACTER SET 'utf8'", $link);

if (isset($_POST['logoutbtn']))
{
	session_destroy();
	header('Location: index.php');
}

else
{
	if (isset($_POST['logbtn'])) {

		$login = mysqli_real_escape_string($link, $_POST['login']);
		$pass = mysqli_real_escape_string($link, $_POST['pass']);
		$query = "SELECT id FROM users WHERE login = '".$login."' AND password = '".$pass."'";
		$_SESSION['user_id'] = '';
		$_SESSION['user_name'] = '';
		if($result = mysqli_query($link, "SELECT id FROM users WHERE 
			login = '".$login."' AND password = '".$pass."'"))
		{
			while ($row = mysqli_fetch_assoc($result)) {
				$_SESSION['user_id']=$row['id'];
				$_SESSION['user_name']=$login;
			}
			mysqli_free_result($result);
		}
	}
            mysqli_close($link);
		    header('Location: index.php');

}
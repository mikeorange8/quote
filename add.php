<?php
error_reporting( E_ERROR );
session_start();

if (isset($_POST['addbtn']) && $_SESSION['user_id']!='')   /*ЕСЛИ КНОПКА ДОБАВЛЕНИЯ БЫЛА НАЖАТА*/
		{
			$link = mysqli_connect("localhost", "root", "usbw", "cita");
			if ($link == false) {
				echo "couldnt connect to database <br>quotation hasnt been added ";
			}
			else
			$quote = $_POST['quotation'];
			$author = $_POST['author'];
			$link->autocommit(FALSE);
			$query="INSERT INTO table_q (quote, author, user) VALUES ('".mysqli_real_escape_string($link,$quote)."', '".mysqli_real_escape_string($link,$author)."', '".mysqli_real_escape_string($link,$_SESSION['user_name'])."')";
			if ($result = mysqli_query($link, $query, MYSQLI_USE_RESULT)) {
				$link->commit();
			    mysqli_free_result($result);
		    }
		    mysqli_close($link);
		    header('Location: index.php');
		}
		    header('Location: index.php');

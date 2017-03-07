
<?php error_reporting( E_ERROR ); ?>
<?php


$login=htmlspecialchars(strip_tags($_POST['login']));
$pass=htmlspecialchars(strip_tags($_POST['pass']));



$link = mysqli_connect("localhost", "root", "usbw", "cita");
      mysql_query ("SET CHARACTER SET 'utf8'", $link);


    /* check connection */ 
    if (!$link) {
    printf("Connect failed: %s\n", mysqli_connect_error());
      exit();
    }

    $query="INSERT INTO users (login, password) VALUES ('".mysqli_real_escape_string($link,$login)."', '".mysqli_real_escape_string($link,$pass)."')";

    if ($result = mysqli_query($link, $query, MYSQLI_USE_RESULT)) {

         if (!mysqli_query($link, "SET @a:='this will not work'")) {
             printf("Ошибка: %s\n", mysqli_error($link));
         }
    mysqli_free_result($result);
    }

    mysqli_close($link);

    header('Location: index.php');
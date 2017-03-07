<?php
  error_reporting( E_ERROR );

     echo $_POST['likecount']+1;
     $like = $_POST['likecount']+1;
     $id = $_POST['idshnik'];
     $link = mysqli_connect("localhost", "root", "usbw", "cita");
     $query = "UPDATE table_q SET likes='".$like."' WHERE id_quotes=".$id;
          if ($result = mysqli_query($link, $query)) {
            while ($row = mysqli_fetch_assoc($result)) {
              $userData = $row;
        }
      }
      mysqli_free_result($result);
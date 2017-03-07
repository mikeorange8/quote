<?php

    error_reporting( E_ERROR );

    $link = mysqli_connect("localhost", "root", "usbw", "cita");
    if ($link == false) {
      echo "cannot connect to database";
    }
    $userData = array();
    if ($result = mysqli_query($link,"SELECT MAX(id_quotes) FROM table_q")) {
      while ($row = mysqli_fetch_assoc($result)) {
        $highid = $row;
      }
    }
    $i =  $highid['MAX(id_quotes)']+1;
    do
    {
      if ($count > $_POST['quotes']) { 
        break;
      }
      $i--;
      if ($result = mysqli_query($link, "SELECT * FROM table_q WHERE id_quotes=".$i)) {
        while ($row = mysqli_fetch_assoc($result)) {
          $userData = $row;
          $count++;
        }
      }
      mysqli_free_result($result);
      if ($userData != null) {

      echo '<div class = "quote">             
          <div class = "forlikes" id="'.$userData["id_quotes"].'"onclick = "changelikes(this.id)" >
               <div class="heart"></div>
          <span class="number_of_likes">'.$userData["likes"].'</span></div>
          '.$userData["quote"].'
          <div class = "info">
            <span id = "author">Author:'.$userData["author"].'</span>
            <span id = "user">User:'.$userData["user"].'</span>
            <span id = "date" style="float:right;" >'.$userData["date"].'</span>
          </div>
      </div>';
    }
    $userData = null;
    }
    while ($i > 0);
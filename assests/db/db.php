
  <?php

  $db_server ='127.0.0.1';
  $db_username='root';
  $db_password='';
  $db_database='bookhub';
  $connection = mysqli_connect($db_server, $db_username, $db_password, $db_database);

  if(!$connection){
    echo "database is not connected";
  }else{
      echo "database is  connected";
  }
   ?>

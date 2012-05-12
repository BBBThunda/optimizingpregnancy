<?php
  /*********************************************
  ****************** DATABASE ******************
  *********************************************/
  // set database access variables:
  $host = "localhost";
  $user = "preg20";
  $pass = "preg20";
  $db = "preg20";
  function openDatabase()
  {
    global $host, $user, $pass, $db;

    ////////////////////////
    // OPEN DB CONNECTION //
    ////////////////////////

    // open connection
    $connection = mysql_connect($host, $user, $pass) or die ("Unable to connect!");

    // SELECT database
    mysql_SELECT_db($db);

    if (mysql_errno() != 0) {die ("Unable to SELECT database!<br />".mysql_error());}

    return $connection;
  }
?>
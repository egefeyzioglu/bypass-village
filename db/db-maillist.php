<?php
  $maillist_db_host = "localhost";
  $maillist_db_username = "root";
  $maillist_db_passwd = "root";
  $maillist_dbname = "bypassvillage";

  $conn_maillist = mysqli_connect($maillist_db_host, $maillist_db_username, $maillist_db_passwd, $maillist_dbname);// or die(mysqli_connect_error());

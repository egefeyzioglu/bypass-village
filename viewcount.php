<?php
  if(isset($viewcount_this_document_path)){
    include('db/db-viewcount.php');
    //Lock, update and unlock the record (this makes it thread-safe.) Not checking whether this fails or not since we don't want to change the user experience if it fails
    $sql = "SELECT view_count FROM view_counts WHERE path = '$viewcount_this_document_path' FOR UPDATE";
    mysqli_query($conn_viewcount, $sql);
    $sql = "UPDATE view_counts SET view_count = view_count + 1 WHERE path = '$viewcount_this_document_path'";
    mysqli_query($conn_viewcount, $sql);
    $sql = "COMMIT";
    mysqli_query($conn_viewcount, $sql);
  }

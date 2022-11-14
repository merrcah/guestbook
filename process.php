<?php 
  require "functions.php";

  // Retreive the input data from the post
  $name = filter_input(INPUT_POST, "name");
  $comment = filter_input(INPUT_POST, "comment");

  
  addGuestbookEntry($name, $comment);
  header('Location: index.php?m=1');
  exit;




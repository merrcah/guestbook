<?php
session_start();

$config = [];
$config['test_db'] = "test.csv";
$config['prod_db'] = "guestbook.csv";

// default to production database
if (!isset($_SESSION['db']))
  $_SESSION['db'] = $config['prod_db'];

//$t = filter_input(INPUT_GET,"t");
$config['db'] = $_SESSION['db'];

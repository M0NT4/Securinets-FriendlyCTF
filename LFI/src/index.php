<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if (empty($_GET)){
  header("Location: ./index.php?page=home.html");
}
if(isset($_GET['page'])){
  $page=$_GET['page'];
  include($page);
}

?>
<?php
if(isset($_GET['value'])) {
 $val = (int)$_GET['value'];
 if($val == 1) {
  header('LOCATION: register.php');
 } else {
  header('LOCATION: list.php');
 }
}

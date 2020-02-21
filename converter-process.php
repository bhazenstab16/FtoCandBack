<?php
include 'functions.php';
?>

<?php 
  $type = $_REQUEST['type'];
  if($type == 'celsius') {
    
      $temp = $_REQUEST['temp'];
      $cel = fahrenheitToCelsius($temp);
      echo "<p>$temp degrees F is $celsius degrees Celsius";
  }  
  if($type == 'farh') {
    
      $temp = $_REQUEST['temp'];
      $farh = celsiusToFahrenheit($temp);
      echo "<p>$temp degrees Celsius is $farh degrees Fahrenheit";
  }
?>
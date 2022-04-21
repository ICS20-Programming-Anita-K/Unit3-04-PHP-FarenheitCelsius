<?php
	// get the temperature in degrees Fahrenheit from the textfields
	$fahrenheit = $_POST['temp-f'];

	// calculate the area
	$celsius = (5/9) * ($fahrenheit - 32) ;
  $celsiusRounded = number_format ($celsius, 2) ;
?>
<!-- Answers -->
The temperature in degrees Celsius is <?php echo "$celsiusRounded"; ?>°C.

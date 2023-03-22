<?php 
  //Declaring a constant for tax rate
  define("TAX_RATE", 0.2005);

  //Declaring variables and converting strings from the form to floats
  $hours = floatval($_POST["hours-worked"]);
  $rate = floatval($_POST["hourly-rate"]);
  $total = $hours * $rate;

  //Calculating tax and pay and rounding decimals
  $tax = number_format($total * TAX_RATE, 2);
  $pay = number_format($total - $tax, 2);
?>

Your pay will be $<?php echo "$pay" ?><br>The government will take $<?php echo "$tax" ?>
<DOCTYPE html>
<html>
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Ben's Salary Program in PHP">
    <meta name="keywords" content="Immaculata, ICS2O">
    <meta name="author" content="Ben Thomson">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">
    
    <!-- Link to CSS -->
    <link rel="stylesheet" href="./css/style.css">
    
    <!-- Web page title -->
    <title>Salary Program in PHP</title>
  </head>
  <body>
    <!-- Body text -->
    <?php 
      echo "<h1>Salary Program in PHP</h1>";
      echo "<p>Please enter your salary information (the number of hours worked and your hourly rate):</p>";
      echo "<h3>Your Information:</h3>";
    ?>

    <!-- User input form -->
    <form action="./calculations.php" method="post" target="result">
      <label for="hours">Number of hours worked</label>
      <input type="float" id="hours-worked" placeholder="Hours worked..." name="hours-worked"><br><br>
      <label for="rate">Hourly rate</label>
      <input type="float" id="hourly-rate" placeholder="Your hourly rate..." name="hourly-rate"><br><br>
      <input type="submit" value="Calculate">
    </form>
    
    <!-- Div for calculations -->
    <iframe id="result" name="result">
    </iframe>
  </body>
</html>
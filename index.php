<!-- <!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>load demo</title>
  <style>
  body {
    font-size: 12px;
    font-family: Arial;
  }
  </style>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
</head>
<body>

<b>Successful Response (should be blank):</b>
<div id="success"></div>
<b>Error Response:</b>
<div id="error"></div>

<script>
$( "#success" ).load( "/not-here.php", function( response, status, xhr ) {
  if ( status == "error" ) {
    var msg = "Sorry but there was an error: ";
    $( "#error" ).html( msg + xhr.status + " " + xhr.statusText );
  }
}); -->

<!DOCTYPE html>
<html>
<body>

<?php

$stdout = fopen('php://stdout', 'w');
echo $stdout;
fclose($stdout);

?>

</body>
</html>
<!-- </script>

</body>
</html> -->

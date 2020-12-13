<!DOCTYPE html>
<html lang="en">
<body>
    <title>Index</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <script src="https://code.jquery.com/jquery.3.4.1.slim.min.js"></script> -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<!-- <script src="popup/sweetalert.js"></script> -->
    <?php
if(isset($_SESSION['status']) && $_SESSION['status']!=' ')
{
?>

  <?php
  unset($_SESSION['status']);
}
  ?>
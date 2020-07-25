<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" type="image/png" href="slike/favicon.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>URL SHORTEN</title>
</head>


<body>
<div class="home">
    <h1 class="naslov">Skrati URL<i class="fa fa-link"></i></h1>
      <form action="shorten.php" method="post" class="input-group mb-3" style=" margin: auto; width: 85%; color: white; border: 1px solid black;">
        <input type="url" class="form-control" placeholder="Unesite URL/LINK, Paste URL/LINK" name="url" autocomplete="offaria-label="Recipient's username" aria-describedby="basic-addon2">
           <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="submit" style="color: white; border: 1px solid black;">
                SKRATI
              </button>

      </form>

            </div> 
  <?php 
      if(isset($_SESSION['feedback'])) {
        echo "<p class='Glink'>{$_SESSION['feedback']} </p>";
      unset($_SESSION['feedback']);
    }
    ?>
</div>
    
  

<div class="footer">
  <p>Autorska prava 2020. Sva prava pridržana.    
    <a target='_blank' href="https://ba.linkedin.com/in/almin-hebibović-554845186"> <i class="fa fa-linkedin" aria-hidden="true"></i></a> 
    <a target='_blank' href="https://www.instagram.com/almin.hebibovic1/"> <i class="fa fa-instagram" aria-hidden="true"></i></a> 
    <a target='_blank' href="https://www.facebook.com/almin.hebibovic1"> <i class="fa fa-facebook" aria-hidden="true"></i></a> </p>
    
</div>
</body>

</html>

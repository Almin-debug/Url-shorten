<?php
session_start();
require_once 'klase/shortener.php';

$s = new Shortener;

if(isset($_POST['url'])) {
   $url = $_POST['url'];

   if($code = $s->makeCode($url)) {
       $_SESSION['feedback'] = "Generisano, Vas skraceni URL je: <a target='_blank' href=\"http://localhost/url/{$code}\">http://localhost/url/{$code}</a> ";
       

   } else {
       // Postoji problem
       $_SESSION['feedback'] = "Postoji problem, da li je validan URL?";
   }
header('location: index.php');
}


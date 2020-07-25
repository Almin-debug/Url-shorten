<?php 
    require_once 'klase/shortener.php';

    if(isset($_GET['code'])) {
        $s = new Shortener;
        $code = $_GET['code'];

        if($url = $s->getUrl($code)) {
            header("location: {$url}");
            die();
        }
   
    }
    
header('Location: index.php');

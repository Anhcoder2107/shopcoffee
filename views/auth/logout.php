<?php 

    session_start();
    session_unset();
    session_destroy();

    $url = 'http://localhost/shopcoffee/';

    header("location: ".$url);
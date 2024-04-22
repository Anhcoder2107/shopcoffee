
<?php 

    session_start();

    //rederect to admin route
    require_once "config/config.php";
    
    $request = $_SERVER['REQUEST_URI'];



    if(strstr($request, 'system-admin')) {  
        if(strstr($request, 'login')){
            require_once('router/admin.php');
        }else{
            if($_SESSION["username"] == "admin") {
                require_once('router/admin.php');
            }else{
                echo "<script>alert('Ban dell co quyen vao day');</script>";
                echo "<script>window.location.href='".APPURL."' </script>";
            }
        }
    } else {
        require_once('router/web.php');
    }

?>



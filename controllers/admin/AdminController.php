<?php
require_once('controllers/Controller.php');



class AdminController extends Controller{
    public function index() {
        require_once('views/admin/Dashboard.php');
    }

    public function login(){
        if(isset($_POST['submit'])){
            if(empty($_POST['email']) OR empty('password')){
                echo "<script>altert('Du lieu khong duoc de trong')</script>";
            }else{
                $email = $_POST['email'];
                $password = $_POST['password'];
                $login = new DB;
                $login = $login->query("SELECT * FROM users WHERE email = '$email'");
                $login->execute();
                $fetch = $login->fetch(PDO::FETCH_ASSOC);
    
                if($login->rowCount() > 0 ){
                    if(password_verify($password, $fetch['userPassword'])){
                        
                        $_SESSION['username'] = $fetch['user'];
                        $_SESSION['email'] = $fetch['email'];
                        $_SESSION['user_id'] = $fetch['id'];
                        $_SESSION['position'] = $fetch['position'];
                        if($_SESSION['position'] == "admin"){
                            echo "<script>window.location.href='".APPURL."system-admin"."' </script>";
                        }else{
                            echo "<script>alert('Ban khong co quyen dang nhap');</script>";
                            echo "<script>window.location.href='".APPURL."views/auth/logout.php' </script>";
                        }
                    }else{
                        echo "<script>alert('email or password is wrong');</script>";
                    }
                }else{
                    echo "<script>alert('Ban khong co quyen dang nhap');</script>";
                    echo "<script>window.location.href='".APPURL."' </script>";
                }
    
            }
        }
        require_once('views/admin/auth/login.php');
    }
}
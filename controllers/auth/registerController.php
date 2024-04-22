
<?php require_once('config/config.php');
  

    //
    class RegisterController {

        public function CheckUniqueEmail($email){ //check unique email in database
            $conn = new DB;
            $query = $conn->prepare("SELECT * FROM users WHERE email = :email");
            $query->execute([
                ':email' => $email
            ]);
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            if(count($result) > 0){
                return false;
            }else{
                return true;
            }
        }


        public function HanderRegister(){

            if(isset($_POST['submit'])){
                if(empty($_POST['name']) OR empty($_POST['email']) OR empty('password')){
                    echo "<script>alert('some inputs are empty');</script>";
                }else{
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    
                    if($this->CheckUniqueEmail($email)){
                        $conn = new DB;
                        $register = $conn->prepare("INSERT INTO users(user, email, userPassword) VALUES (:user_name, :email, :userPassword)");            
                        $register->execute([
                            ':user_name'  => $name,
                            ':email' => $email,
                            ':userPassword' => password_hash($password, PASSWORD_DEFAULT),
                        ]);
                        
                        echo "<script>window.location.href='".APPURL."login' </script>";
                    }
                    else{
                        echo "<script>alert('email is not unique');</script>";
                    }
                }
            }
            require_once('views/auth/register.php');
        }

        
    }



   
?>



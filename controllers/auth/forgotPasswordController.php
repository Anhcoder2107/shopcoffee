
<?php 
require_once("config/config.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

class ForgotPasswordController {


    public function generateVerificationCode() {
        // random number 100000 to 999999
        return rand(100000, 999999); 
    }

    public function FormGetEmail() {
        if(isset($_POST['submit'])){
            if(empty($_POST['email'])){
                echo "<script>alert('Du lieu khong duoc de trong')</script>";
            }else{
                $email = $_POST['email'];
                //check email in database
                $login = new DB;
                $login = $login->query("SELECT * FROM users WHERE email = '$email'");
                $login->execute();
                $result = $login->fetchAll(PDO::FETCH_ASSOC);
                $_SESSION['email'] = $email;
                
                if(count($result) == 0){
                    echo "<script>alert('Email khong ton tai')</script>";
                }else{
                    $code = $this->generateVerificationCode();
                    $_SESSION['code_forgotpassword'] = $code;
                    $this->sendEmail($email, $code);
                }
            }
        }
        require_once("views/auth/forgotPassword.php");
    }

    public function sendEmail($email, $code) {
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = FALSE;                             //SMTP::DEBUG_SERVER Enable verbose debug output
            $mail->isSMTP();                                      //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                 //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                             //Enable SMTP authentication
            $mail->Username   = 'trinhnhatanh47@gmail.com';       //SMTP username
            $mail->Password   = 'oyexhvzesxplwejo';               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;      //Enable implicit TLS encryption
            $mail->Port       = 465;                              //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom($email, 'ShopCoffee');
            $mail->addAddress($email, 'User');     //Add a recipient
            $mail->addAddress($email);             //Name is optional

            
            //Content
            $mail->isHTML(true);
            $mail->Subject = 'Forgot Password';
            $mail->Body = 'Code: ' . $code; 

            //send mail
            $mail->send();
            echo "<script>alert('Ma Code da duoc gui vao email: " . $_SESSION['email'] . "')</script>";
            //rederect to forgotPassword
            echo "<script>window.location.href = 'resetPassword'</script>";
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }


    public function resetPassword() {
        if(isset($_POST['submit'])){
            if(empty($_POST['password'])){
                echo "<script>alert('Du lieu khong duoc de trong')</script>";
            }else{
                //check code 
                $code = $_POST['code'];
                $codeVerify = $_SESSION['code_forgotpassword'];
                if($code == $codeVerify){
                    $email = $_SESSION['email'];
                    $password = $_POST['password'];
                    $password = password_hash($password, PASSWORD_DEFAULT);
                    $conn = new DB;
                    $conn = $conn->query("UPDATE users SET userPassword = '$password' WHERE email = '$email'");
                    if($conn){
                        //reset session code_forgotpassword is null 
                        $_SESSION['code_forgotpassword'] = 0;
                        //redirect to login page
                        echo "<script>window.location.href = 'login'</script>";

                    }else{
                        echo "<script>alert('reset password fail')</script>";
                    }
                }else{
                    echo "<script>alert('Code is false')</script>";
                    echo "<script>window.location.href = 'resetPassword'</script>";
                }
            }
        }
        require_once("views/auth/resetPassword.php");
    }
}


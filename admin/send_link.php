<?php
    session_start();
    if(!isset($_SESSION["loggedinadmin"]) || $_SESSION["loggedinadmin"] === false){
      header("location: login.php");
      exit;
    }
?>

<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    require 'vendor/autoload.php';
    $mail = new PHPMailer(true);
    if (isset($_POST['submit_email']) && $_POST['email'])
    {
        $conn = new mysqli('localhost', 'upezzsmy_promoti', 'upezzsmy_promoti', 'upezzsmy_promoti');
        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT username, password FROM admin WHERE username='" . $_POST['email'] . "'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0)
        {
            while ($row = $result->fetch_assoc())
            {
                $email = $row['username'];
                $pass = $row['password'];
            }
            $link = "<a href='www.azurcondo.com/promolta.com/admin/reset_pass.php?key=" . $email . "&reset=" . $pass . "'>Click To Reset password</a>";
            
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
		    //$mail->isSMTP();
		    $mail->Host       = 'smtp.gmail.com';
		    $mail->SMTPAuth   = true;
		    $mail->Username   = 'suschats.online@gmail.com';
		    $mail->Password   = 'Suschats.online1';
		    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
		    $mail->Port       = 587;

		    //Recipients
		    $mail->setFrom('suschats.online@gmail.com', 'Suschats Online');
		    $mail->addAddress($email, '');
		    $mail->addAddress($email);
		    $mail->addReplyTo($email, 'Information');

		    //Content
		    $mail->isHTML(true);
		    $mail->Subject = "Reset Password";
		    $mail->Body    = $link;

		    $mail->send();
        }
        $conn->close();
    }
?>
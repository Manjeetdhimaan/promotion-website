<?php
    session_start();
    if(!isset($_SESSION["loggedinadmin"]) || $_SESSION["loggedinadmin"] === false){
      header("location: login.php");
      exit;
    }
?>

<?php
    if (isset($_POST['submit_password']) && $_POST['email'] && $_POST['password'])
    {
        $email = $_POST['email'];
        $pass = $_POST['password'];
    
        $conn = new mysqli('localhost', 'upezzsmy_promoti', 'upezzsmy_promoti', 'upezzsmy_promoti');
        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }
        $pass = password_hash($pass, PASSWORD_DEFAULT);
        $sql = "UPDATE admin SET password='".$pass."' where username='".$email."'";
        $result = $conn->query($sql);
    }
?>
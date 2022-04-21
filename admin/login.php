<?php
    session_start();
    if(isset($_SESSION["loggedinadmin"]) && $_SESSION["loggedinadmin"] === true){
      header("location: index.php");
      exit;
    }
    require_once "config.php";
    $username = $password = "";
    $username_err = $password_err = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty(trim($_POST["username"]))){
            $username_err = "Please enter username.";
        } else{
            $username = trim($_POST["username"]);
        }
        if(empty(trim($_POST["password"]))){
            $password_err = "Please enter your password.";
        } else{
            $password = trim($_POST["password"]);
        }
        if(empty($username_err) && empty($password_err)){
            $sql = "SELECT id, username, password FROM admin WHERE username = ?";
            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "s", $param_username);
                $param_username = $username;
                if(mysqli_stmt_execute($stmt)){
                    mysqli_stmt_store_result($stmt);
                    if(mysqli_stmt_num_rows($stmt) == 1){
                        mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                        if(mysqli_stmt_fetch($stmt)){
                            if(password_verify($password, $hashed_password)){
                                session_start();
                                $_SESSION["loggedinadmin"] = true;
                                $_SESSION["idadmin"] = $id;
                                $_SESSION["usernameadmin"] = $username;
                                header("location: index.php");
                            } else{
                                $password_err = "The password you entered was not valid.";
                            }
                        }
                    } else{
                        $username_err = "No account found with that username.";
                    }
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }
                mysqli_stmt_close($stmt);
            }
        }
        mysqli_close($link);
    }
?>

<?php include 'header.php'; ?>
<div class="main_content_iner ">
<div class="container-fluid plr_30 body_white_bg pt_30">
	<div class="row justify-content-center">
		<div class="col-lg-12">
			<div class="white_box mb_30">
				<div class="row justify-content-center">
					<div class="col-lg-6">
						<div class="modal-content cs_modal">
							<div class="modal-header">
								<h5 class="modal-title">Log in</h5>
							</div>
							<div class="modal-body">
								<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
									<div class="form-group">
										<input type="email" class="form-control" placeholder="Enter your email" name="username">
									</div>
									<div class="form-group">
										<input type="password" class="form-control" placeholder="Password" name="password">
									</div>
									<input type="submit" style="background-color: blue; color: white; padding-bottom: 60px;" value="Log in">
									<div class="text-center">
										<a href="forgot_pass.php" data-target="#forgot_password" data-dismiss="modal" class="pass_forget_btn">Forget Password?</a>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>
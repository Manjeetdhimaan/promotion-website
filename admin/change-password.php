<?php
    session_start();
    if(!isset($_SESSION["loggedinadmin"]) || $_SESSION["loggedinadmin"] === false){
      header("location: login.php");
      exit;
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
								<h5 class="modal-title">Change Password</h5>
							</div>
							<div class="modal-body">
								<form method="post" action="submit_new.php">
								    <input type="hidden" name="email" value="<?php echo 'gchoi123x@gmail.com' ?>">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Enter your new Password" id="password">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Confirm Password" name="password" oninput="check(this);">
									</div>
									<input type="submit" name="submit_password" style="background-color: blue; color: white; padding-bottom: 60px;">
								</form>
								<script language='javascript' type='text/javascript'>
                                    function check(input) {
                                        if (input.value != document.getElementById('password').value) {
                                            input.setCustomValidity('Password Must be Matching.');
                                        } else {
                                            // input is valid -- reset the error message
                                            input.setCustomValidity('');
                                        }
                                    }
                                </script>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>
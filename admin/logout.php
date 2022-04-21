<?php
    session_start();
    if(!isset($_SESSION["loggedinadmin"]) || $_SESSION["loggedinadmin"] === false){
      header("location: login.php");
      exit;
    }
    $_SESSION = array();
    session_destroy();
    header("location: login.php");
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
								<h5 class="modal-title">Logged out successfully</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>
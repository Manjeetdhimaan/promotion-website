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
								<h5 class="modal-title">Forget Password</h5>
							</div>
							<div class="modal-body">
								<form method="post" action="send_link.php">
									<div class="form-group">
										<input type="email" class="form-control" placeholder="Enter your email" name="email">
									</div>
									<input type="submit" name="submit_email" style="background-color: blue; color: white; padding-bottom: 60px;">
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
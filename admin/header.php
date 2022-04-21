<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="zxx">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Admin Panel</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="vendors/themefy_icon/themify-icons.css">
		<link rel="stylesheet" href="vendors/swiper_slider/css/swiper.min.css">
		<link rel="stylesheet" href="vendors/select2/css/select2.min.css">
		<link rel="stylesheet" href="vendors/niceselect/css/nice-select.css">
		<link rel="stylesheet" href="vendors/owl_carousel/css/owl.carousel.css">
		<link rel="stylesheet" href="vendors/gijgo/gijgo.min.css">
		<link rel="stylesheet" href="vendors/font_awesome/css/all.min.css">
		<link rel="stylesheet" href="vendors/tagsinput/tagsinput.css">
		<link rel="stylesheet" href="vendors/datatable/css/jquery.dataTables.min.css">
		<link rel="stylesheet" href="vendors/datatable/css/responsive.dataTables.min.css">
		<link rel="stylesheet" href="vendors/datatable/css/buttons.dataTables.min.css">
		<link rel="stylesheet" href="vendors/text_editor/summernote-bs4.css">
		<link rel="stylesheet" href="vendors/morris/morris.css">
		<link rel="stylesheet" href="vendors/material_icon/material-icons.css">
		<link rel="stylesheet" href="css/metisMenu.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/colors/default.css" id="colorSkinCSS">
	</head>
	<body class="crm_body_bg">
		<nav class="sidebar" id="sidebar">
			<div class="logo d-flex justify-content-between">
				<a href="index.php"><img src="img/adminlogo.png" style="width: 180px; height: 100px;"></a>
				<div class="sidebar_close_icon d-lg-none">
					<i class="ti-close"></i>
				</div>
			</div>
			<ul id="sidebar_menu">
				<li class="">
					<a href="#" >
					<a href="index.php">  <img src="img/menu-icon/1.svg" alt="">Dashboard </a>
					</a>
				</li>
				<li class="">
					<a class="has-arrow" href="#" aria-expanded="false">
					<img src="img/menu-icon/2.svg" alt="">
					<span>Pages</span>
					</a>		  
					<ul>
						<li><a href="view-orders.php">View All Orders</a></li>
						<li><a href="view-users.php">View All Users</a></li>
						<li><a href="change-password.php">Change Password</a></li>
						<li><a href="forgot_pass.php">Forgot Password</a></li>
						<li><a href="logout.php">Log Out</a></li>
					</ul>
				</li>
			</ul>
		</nav>
		<section class="main_content dashboard_part">
		<div class="container-fluid no-gutters" id="topRightSection">
			<div class="row">
				<div class="col-lg-12 p-0">
					<div class="header_iner d-flex justify-content-between align-items-center">
						<div class="sidebar_icon d-lg-none">
							<i class="ti-menu"></i>
						</div>
						<div class="serach_field-area">
							<div class="search_inner">
								<h3>Welcome Admin</h3>
							</div>
						</div>
						<div class="header_right d-flex justify-content-between align-items-center">
							<div class="profile_info">
								<img src="img/adminavatar.png" alt="#">
								<div class="profile_info_iner">
									<p>Welcome Admin!</p>
									<h5>Admin</h5>
									<div class="profile_info_details">
										<a href="change-password.php">Change Password <i class="ti-user"></i></a>
										<a href="logout.php">Log Out <i class="ti-shift-left"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
            if(!isset($_SESSION["loggedinadmin"]) || $_SESSION["loggedinadmin"] === false){
                echo "<script>document.getElementById('sidebar').style.display='none'; document.getElementById('topRightSection').style.display='none';</script>";
            }else{
                echo "<script>document.getElementById('sidebar').style.display='block'; document.getElementById('topRightSection').style.display='block';</script>";
            }
		?>
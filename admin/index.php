<?php
    session_start();
    if(!isset($_SESSION["loggedinadmin"]) || $_SESSION["loggedinadmin"] === false){
      header("location: login.php");
      exit;
    }
?>

<?php include 'header.php'; ?>
<div class="main_content_iner">
        <div class="container-fluid plr_30 body_white_bg pt_30">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="single_element">
                        <div class="quick_activity">
                            <div class="row">
                                <div class="col-12">
                                    <div class="quick_activity_wrap">
                                       <a href="view-orders.php">
									   <div class="single_quick_activity">
                                            <h4>Total Orders</h4>
                                            <h3><span class="counter">
                                                <?php
                                                    require_once "dbcontroller.php";
                                                    $db_handle = new DBController();
                                                    $row = $db_handle->runQuery("SELECT * FROM users");
                                                    $count=0;
                                                    foreach($row as $item) {
                                                        $count+=substr_count($item['order_status'], "+")+1;
                                                    }
                                                    echo $count;
                                                ?>
                                            </span></h3>
                                        </div>
										</a>
                                        <div class="single_quick_activity">
                                            <h4>Total Income</h4>
                                            <h3><span class="counter">
                                                <?php
                                                    require_once "dbcontroller.php";
                                                    $db_handle = new DBController();
                                                    $row = $db_handle->runQuery("SELECT * FROM users");
                                                    $total=0;
                                                    foreach($row as $item) {
                                                        $string=$item["order_details"];
                                                        $delimiter="+";
                                                        $token=strtok($string, $delimiter);
                                                        while($token !==false){
                                                            $strpos=strpos($token, "Budget: ");
                                                            $newStr=substr($token, $strpos+8);
                                                            $strpos=strpos($newStr, "Views: ");
                                                            $newStr=substr($newStr, 0, $strpos-2);
                                                            $total+=$newStr;
                                                            $token =strtok($delimiter);  
                                                        }
                                                    }
                                                    echo "$".$total." USD";
                                                ?>
                                            </span></h3>
                                        </div>
										<a href="view-users.php">
                                        <div class="single_quick_activity">
                                            <h4>Total Users</h4>
                                            <h3><span class="counter">
                                            <?php
                                                require_once "dbcontroller.php";
                                                $db_handle = new DBController();
                                                $row = $db_handle->runQuery("SELECT * FROM users");
                                                echo count($row);
                                            ?>
                                            </span></h3>
                                        </div>
										</a>
										<a href="view-orders.php">
                                        <div class="single_quick_activity">
                                            <h4>Order Staus</h4>
                                            <h3>Update Order Now</h3>                                        
											</div>
										</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <?php include 'footer.php'; ?>
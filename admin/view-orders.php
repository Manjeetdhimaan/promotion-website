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
		<div class="col-md-12">
			<div class="white_box QA_section">
				<div class="white_box_tittle list_header">
					<h4>Orders List</h4>
					<div class="box_right d-flex lms_block">
						<div class="serach_field_2">
							<div class="search_inner">
								<form Active="#">
									<div class="search_field">
										<input type="text" placeholder="Search content here...">
									</div>
									<button type="submit">
									<i class="ti-search"></i>
									</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="QA_table ">
					<div class="dropdown">
						<a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Action
						</a>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
							<a class="dropdown-item" href="#" onclick="
							    var x=document.getElementsByClassName('checkbox');
							    var tempArr=[];
                                for(var i = 0; i < x.length; i++) {
                                    if(x[i].checked) {
                                        tempArr.push(x[i]);
                                    }
                                }
                                var arr=[];
							    for(var i=0; i<tempArr.length; i++){
							        var c=tempArr[i].parentElement.parentElement.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.children[1].value;
							        arr.push(c);
							    }
							    var b='uncomplete';
							    var a='';
							    for(var i=0; i<tempArr.length; i++){
							        a=tempArr[i].parentElement.parentElement.nextElementSibling.children[0].children[0].children[0].innerHTML.split('\n')[0];
							        buttonClick(a, b, arr, 0);
							    }
							">Mark as Complete</a>
							<a class="dropdown-item" href="#" onclick="
        						var x=document.getElementsByClassName('checkbox');
							    var tempArr=[];
                                for(var i = 0; i < x.length; i++) {
                                    if(x[i].checked) {
                                        tempArr.push(x[i]);
                                    }
                                }
                                var arr=[];
							    for(var i=0; i<tempArr.length; i++){
							        var c=tempArr[i].parentElement.parentElement.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.children[1].value;
							        arr.push(c);
							    }
							    var b='complete';
							    var a='';
							    for(var i=0; i<tempArr.length; i++){
							        a=tempArr[i].parentElement.parentElement.nextElementSibling.children[0].children[0].children[0].innerHTML.split('\n')[0];
							        buttonClick(a, b, arr, 0);
							    }
							">Mark as Uncomplete</a>
						</div>
					</div>
					<table class="table lms_table_active">
						<thead>
							<tr>
								<th scope="col">
									<label class="primary_checkbox d-flex mr-12 ">
									<input id="checkbox" type="checkbox" onclick="
									x=document.getElementsByClassName('checkbox');
									var i;
								    for (i = 0; i < x.length; i++) {
								      if(document.getElementById('checkbox').checked){
								        x[i].checked = true;
								      }else{
								        x[i].checked = false;
								      }
                                    }
									">
									<span class="checkmark"></span>
									</label>
								</th>
								<th scope="col">Username</th>
								<th scope="col">Status</th>
								<th scope="col">Order Details</th>
								<th scope="col">Update Order</th>
							</tr>
						</thead>
						<tbody>
    						<?php
    					        require_once "dbcontroller.php";
    					        $db_handle = new DBController();
    					        $row = $db_handle->runQuery("SELECT * FROM users");
                                foreach($row as $item) {
                                    $count=substr_count($item['order_status'], "+");
                                    $count+=1;
                                    $originalOrderStatus=$item['order_status'];
                                    $originalOrderDetails=$item['order_details'];
                                    for ($i = 0; $i < $count; $i++) {
                                        $pos=strpos($originalOrderStatus, "+");
                                        if($pos !== false){
                                            $str1=substr($originalOrderStatus, 0, $pos-1);
                                            $originalOrderStatus=substr($originalOrderStatus, $pos+1);
                                        }else{
                                            $str1=$originalOrderStatus;
                                            $originalOrderStatus="";
                                        }

                                        $pos=strpos($originalOrderDetails, "+");
                                        if($pos !== false){
                                            $str2=substr($originalOrderDetails, 0, $pos-1);
                                            $originalOrderDetails=substr($originalOrderDetails, $pos+3);
                                        }else{
                                            $str2=$originalOrderDetails;
                                            $originalOrderDetails="";
                                        }
                                        while (preg_match('/\n/', $str2)) {
                                            $str2 = preg_replace('/\n/', '<br>', $str2, 1);
                                        }
                                echo '
							<tr>
								<th scope="row">
									<label class="primary_checkbox d-flex mr-12">
									    <input type="checkbox" class="checkbox">
									    <span class="checkmark"></span>
									</label>
								</th>
								<td>
									<div class="media align-items-center">
										<div class="media-body">
											<p>';
											    echo $item['username'];
											    echo '
											</p>
										</div>
									</div>
								</td>
								<td>
									<p class="';
									    if (strpos($str1, 'uncomplete') !== false) {
                                            echo 'pending-order';
                                        }else{
                                            echo 'completed-order';
                                        }
									    echo '">';
									    echo $str1;
									    echo '
									</p>
								</td>
								<td>
									<p class="nowrap">';
									    echo $str2;
									    echo '
									</p>
								</td>
								<td>
									<a href="#" class="';
										if (strpos($str1, 'uncomplete') !== false) {
                                            echo 'uncomplete';
                                        }else{
                                            echo 'completeo';
                                        }
                                        
									    $username=$item['username'];
									    if (strpos($str1, 'uncomplete') !== false) {
                                            $order_status='uncomplete';
                                        }else{
                                            $order_status='complete';
                                        }
                                        $paramArr=array();
                                        $paramArr[]= $i;
									    echo '" onclick="buttonClick(\'' . $username . '\', \'' . $order_status . '\', \'' . json_encode($paramArr) . '\', 1);">';
									    if (strpos($str1, 'uncomplete') !== false) {
                                            echo 'Mark as Completed';
                                        }else{
                                            echo 'Mark as Uncomplete';
                                        }
									    echo '
									</a><input type="hidden" value="'.$i.'">
								</td>
							</tr>';
                                }
                                }
                            ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<script async defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    function buttonClick(username, order_status, elements, flag){
		$.ajax({
			type :'POST',
			data : {
			    username: username,
			    order_status: order_status,
			    elements: flag === 1 ? JSON.parse(elements) : elements
			},
			url  : 'button_click.php',
			success : function(response){
			    location.reload();
			},
			error : function(e){
				console.log(e);
			}
		});
    }
</script>
<?php include 'footer.php'; ?>
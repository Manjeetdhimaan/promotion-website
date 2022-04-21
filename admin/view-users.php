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
					<h4>Users List</h4>
				</div>
				<div class="QA_table ">
					<div class="dropdown">
						<a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Action
						</a>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
							<a class="dropdown-item" href="#" onclick="x=document.getElementsByClassName('checkbox');
    							for (var i = 0; i < x.length; i++) {
                                    if(x[i].checked && x[i].parentElement.parentElement.nextElementSibling.nextElementSibling.children[0].innerHTML.split('\n')[0]==='active'){
        							    var a=x[i].parentElement.parentElement.nextElementSibling.children[0].children[0].children[0].innerHTML;
                                        a=a.match(/([a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z0-9_-]+)/gi)[0];
        							    var b=x[i].parentElement.parentElement.nextElementSibling.nextElementSibling.children[0].innerHTML.split('\n')[0];
        							    buttonClick(a, b);
        							}
                                }
							">Suspend Users</a>
							<a class="dropdown-item" href="#" onclick="x=document.getElementsByClassName('checkbox');
    							for (var i = 0; i < x.length; i++) {
                                    if(x[i].checked && x[i].parentElement.parentElement.nextElementSibling.nextElementSibling.children[0].innerHTML.split('\n')[0]==='suspended'){
        							    var a=x[i].parentElement.parentElement.nextElementSibling.children[0].children[0].children[0].innerHTML;
                                        a=a.match(/([a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z0-9_-]+)/gi)[0];
        							    var b=x[i].parentElement.parentElement.nextElementSibling.nextElementSibling.children[0].innerHTML.split('\n')[0];
        							    buttonClick(a, b);
        							}
                                }
							">Unsuspend/Active Users</a>
							<a class="dropdown-item" href="#" onclick="x=document.getElementsByClassName('checkbox');
    							for (var i = 0; i < x.length; i++) {
                                    if(x[i].checked){
        							    var a=x[i].parentElement.parentElement.nextElementSibling.children[0].children[0].children[0].innerHTML;
                                        a=a.match(/([a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z0-9_-]+)/gi)[0];
        							    buttonClickDelete(a);
        							}
                                }
							">Delete Users</a>
						</div>
					</div>
					<table>
						<thead>
							<tr>
								<th scope="col">
									<label class="primary_checkbox d-flex mr-12 ">
									<input type="checkbox" id="checkbox" onclick="
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
								<th scope="col">Update Order</th>
							</tr>
						</thead>
						<tbody>
						    <?php
    					        require_once "dbcontroller.php";
    					        $db_handle = new DBController();
    					        $row = $db_handle->runQuery("SELECT * FROM users");
    					        foreach($row as $item) {
    					            ?>
							<tr>
								<th scope="row">
									<label class="primary_checkbox d-flex mr-12 ">
    									<input type="checkbox" class="checkbox">
    									<span class="checkmark"></span>
									</label>
								</th>
								<td>
									<div class="media align-items-center">
										<div class="media-body">
											<p>
    											<?php
    											    echo $item["username"];
    											?>
											</p>
										</div>
									</div>
								</td>
								<td>
								    <?php
								        echo "<p class=\"";
								        if($item["account_status"]==="active"){
									        echo "completed-order";
									    }else{
									        echo "pending-order";
									    }
									    echo "\">";
										echo $item["account_status"];
									    echo "</p>";
									?>
								</td>
								<td>
								    <?php
								        echo "<a href=\"#\" class=\"";
								        if($item["account_status"]==="active"){
									        echo "completeo";
									    }else{
									        echo "uncomplete";
									    }
									    echo "\"";
									    
									    $username=$item['username'];
									    $account_status=$item['account_status'];
									    echo 'onclick="buttonClick(\'' . $username . '\', \'' . $account_status . '\')";>';
										if($item["account_status"]==="active"){
										    echo "Suspend User";
										}else{
										    echo "Unsuspend User";
										}
									    echo "</a>";
									?>
								</td>
							</tr>
							<?php
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
    function buttonClick(username, account_status){
		$.ajax({
			type :'POST',
			data : {
			    username: username,
			    account_status: account_status
			},
			url  : 'button2_click.php',
			success : function(response){
			    location.reload();
			},
			error : function(e){
				console.log(e);
			}
		});
    }
    function buttonClickDelete(username){
		$.ajax({
			type :'POST',
			data : {
			    username: username
			},
			url  : 'button3_click.php',
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
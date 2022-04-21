<?php
    $con = mysqli_connect("localhost", "upezzsmy_promoti", "upezzsmy_promoti", "upezzsmy_promoti");
    if (!$con){
        die ("Could not connect: " . mysqli_error($con));
    }else{
        //echo "Connected successfully. <hr>";
    }
    if($_POST["account_status"]==="suspended"){
        $account_status="active";
    }else{
        $account_status="suspended";
    }
    $sql="UPDATE users SET account_status='" . $account_status . "' WHERE username='" . $_POST["username"] . "'";
    $result=mysqli_query($con, $sql);
    mysqli_close($con);
?>
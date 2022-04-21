<?php
    $con = mysqli_connect("localhost", "upezzsmy_promoti", "upezzsmy_promoti", "upezzsmy_promoti");
    if (!$con){
        die ("Could not connect: " . mysqli_error($con));
    }else{
        //echo "Connected successfully. <hr>";
    }
    $sql="DELETE FROM users WHERE username='" . $_POST["username"] . "'";
    $result=mysqli_query($con, $sql);
    mysqli_close($con);
?>
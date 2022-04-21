<?php
    $con = mysqli_connect("localhost", "upezzsmy_promoti", "upezzsmy_promoti", "upezzsmy_promoti");
    if (!$con){
        die ("Could not connect: " . mysqli_error($con));
    }else{
        //echo "Connected successfully. <hr>";
    }
    
    function strposX($haystack, $needle, $number) {
        if ($number == 1) {
            return strpos($haystack, $needle);
        } elseif ($number > 1) {
            return strpos($haystack, $needle, strposX($haystack, $needle, $number - 1) + strlen($needle));
        } else {
            return error_log('Error: Value for parameter $number is out of range');
        }
    }
    $arr = $_POST["elements"];
    
    $sql="SELECT order_status FROM users WHERE username='" . $_POST["username"] . "'";
    $result=mysqli_query($con, $sql);
    $cell=mysqli_fetch_array($result)["order_status"];
    $count=substr_count($cell, "+");
    $count+=1; //number of orders
    if($_POST['order_status']==="complete"){
        $newStr="uncomplete";
    }else{
        $newStr="complete";
    }
    for ($i=0; $i<count($arr); $i++){
        $sql="SELECT order_status FROM users WHERE username='" . $_POST["username"] . "'";
        $result=mysqli_query($con, $sql);
        $cell=mysqli_fetch_array($result)["order_status"];
        if($count === 1){
            if($_POST['order_status']==="complete"){
                $str="uncomplete";
            }else{
                $str="complete";
            }
        }elseif($count === 2){
            $strpos1=strposX($cell, "+", 1);
            if($arr[$i]==0){
                $str = $newStr . substr($cell, $strpos1 - 2);
            }elseif($arr[$i]==1){
                $str=substr($cell, 0, $strpos1+2) . $newStr;
            }
        }else{//three or more existing elements in order_status
            $strpos1=strposX($cell, "+", $arr[$i]);
            $strpos2=strposX($cell, "+", $arr[$i]+1);
            if($strpos2===false){
                $str = substr($cell, 0, $strpos1+2) . $newStr;
            }else{
                if($arr[$i]==0){
                    $str = $newStr . substr($cell, $strpos2-2);
                }else{
                    $str = substr($cell, 0, $strpos1+2) . $newStr . substr($cell, $strpos2-2);
                }
            }
        }
        $sql="UPDATE users SET order_status='" . $str . "' WHERE username='" . $_POST["username"] . "'";
        $result=mysqli_query($con, $sql);
    }

    mysqli_close($con);
?>
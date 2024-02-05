<?php

if(isset($_POST['submit'])){
    if(isset($_POST['name']) && !empty($_POST['name'] &&
    isset($_POST['email']) && !empty($_POST['email']) &&
    isset($_POST['gender']) && !empty($_POST['gender']) &&
    isset($_POST['agree'])))
    {

        mysqli_select_db($link, $dbname);

            $mysql = "INSERT INTO user (user_name , user_email , user_gender, user_mail_status)
            VALUES ('".$_POST['name']." ', '".$_POST['email']. " ' , '".$_POST['gender']."', '".$_POST['agree']."');";

            $retrive = mysqli_query($link , $mysql);

            if(!$retrive){
                echo "failed to update";
            }
            echo "<h4> Table updated </h4>";
            mysqli_close($link);

    } 
}


$receive = "false";
if (isset($_POST["user_receive"])) {
    $receive =$_POST["user_receive"];
}

?>
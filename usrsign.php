<form action="" method="post">

USER NAME<input type="text" name="uname">
PHONE NO<input type="text" name="phn">
EMAIL<input type="email" name="email">
<input type="submit" name="submit" >
         
</form>

    


<?php

include "db.php";




if($conn->connect_error){
    echo "not connected " . $conn->connect_error;
}

if(isset($_POST["submit"])){
    $uname=$_POST["uname"];
    $phone=$_POST["phn"];
    $email=$_POST["email"];
    
    if($uname==""||$phone==""||$email=="")
    {
        echo "fields are empty";
    }
    else if (strlen($phone) < 10|| strlen($phone) > 10) {
        die ("phone number should be 10 digit");
    }
    else {

        $chkquery = "select * from signup where phone='$phone'";
        $rslt = $conn->query($chkquery);

        if ($rslt->num_rows > 0) {
            echo "already exist";
        }
        else {
            $sql="insert into register(user,phone,email) values ('$uname','$phone','$email')";
        

            if ($conn->query($sql) === TRUE) {
                echo "done";
            }
            else {
                echo " nor done";
            }
        }
     
        


    }


}

?>
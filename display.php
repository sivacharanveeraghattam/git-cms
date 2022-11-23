<?php

include("conn.php");
error_reporting(0);

$query = "SELECT * FROM form "; 

$data = mysqli_query($con,$query);

$total = mysqli_num_rows($data);

$result = mysqli_fetch_assoc($data);

echo $result [fname]." ".$result [lname]." ".$result [password]." ".$result [cpassword	]." ".$result [gender]." ".$result [email]." ".$result [phone]." ".$result [address];
//echo ;
//echo ;


//echo $total;
if($total !=0){
    //echo "table has records";
    $a = 1;
    while($a <=10){
        echo "hello siva<br>";
        $a++;
    }
}else{
    echo "no record found";

}

?>
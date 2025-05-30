<?php

include('connect.php');


extract($_POST);
$result=$con->query("insert into users(name,mobilenumber,gender,date,class,year,username,password,role) values ('$name','$mobilenumber','$gender','$date','$class','$year','$username','$password','$role')");
var_dump($result);
if($result){
    echo '<script>
        alert("Register Succesfull")
                window.location = "index.html";
            </script>';
}

?>
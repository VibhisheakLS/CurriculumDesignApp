<?php
$email = $_POST['email'];
$passwd =$_POST['password'];
$Uname =$_POST['name'];
$cpasswd =  $_POST['cpassword'];  

$host = "localhost";
$user = "root";
$password = "";
$db_name = "course_out_comes";
$conn = mysqli_connect($host, $user, $password, $db_name);

$stmt = "INSERT INTO faculty(name,email,password) values ('$Uname','$email',md5('$passwd'));";
$stm = "SELECT * from faculty";
$is_already_exist = false;

if ($res = mysqli_query($conn, $stm)){
    while($row = mysqli_fetch_assoc($res))
    {
        if($row['name'] == $Uname){
            $is_already_exist = true;
        }
    }
}

if($is_already_exist){
    echo "
    <div style='background-color:blue;padding:5px;text-align:center;color:white'>
        <p>User Name Already Exist pls Enter New User Name</p>
    </div>
    <div style='text-align:center'>
        <button style='padding: 0.5em;margin:1em;'><a href='./signup.html'>continue</a></button>
    </div>";
}else{
    if($cpasswd == $passwd){
        if (mysqli_query($conn, $stmt)) {
            echo "
            <div style='background-color:blue;padding:5px;text-align:center;color:white'>
                <p>User Account Created.</p>
                <p>You can access this wesbite for creating COs !</P>
            </div>
            <div style='text-align:center'>
                <button style='padding: 0.5em;margin:1em;'><a href='../home.html'>HOME</a></button>
            </div>";
        } else {
            echo "Connection failed " . mysqli_error($conn);
        }
    }else{
        echo "
        <div style='background-color:blue;padding:5px;text-align:center;color:white'>
            <p>Your Password and Confirm Password does not match</p>
        </div>
        <div style='text-align:center'>
            <button style='padding: 0.5em;margin:1em;'><a href='./signup.html'>continue</a></button>
        </div>";
    }
}
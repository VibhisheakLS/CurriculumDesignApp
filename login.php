<!-- Login Error Page / Second Page  -->
<!-- This page appears if there is a error in login credentials -->
<!-- Else This page redirectes faculties to home.php -->

<?php
session_start();
$name = $_POST['name'];
$paswd = $_POST['password'];

$host = "localhost";
$user = "root";
$password = "";
$db_name = "course_out_comes";
$can_login = true;

try {
    $conn = mysqli_connect($host, $user, $password, $db_name);
    
    $sql = "SELECT * FROM faculty";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            if ($name == $row['name'] && md5($paswd) == $row['password']) {

                header("Location: ./curriculum.php");
            }else{
                $can_login =false;
            }
        }
    }

    if(!$can_login){
        echo '<script language="javascript">';
        echo 'alert("CHECK EMAIL OR PASSWORD");';
        echo 'window.location = "home.html"';
        echo '</script>';
    }

} catch (PDOException $e) {
    echo "ERROR TRY AGAIN LATER";
}

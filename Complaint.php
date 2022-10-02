<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "testing");
// if (mysqli_connect()) {
//     echo "<script>
//                 alert('cannot connect');

//                 </script>";
//     exit();
// }
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['send'])) {
        $query3 = "INSERT INTO `complaints`( `fullname`, `email`, `comment`)  VALUES ('$_POST[fullname]','$_POST[email]','$_POST[comment]')";
        if (mysqli_query($con, $query3)) {
            echo "<script>
                        alert('Complaint Registered');
                </script>";
            header("Location: ContactUs.php");
        } else {
            echo "<script>alert('sql error');</script>";
        }
    }
}

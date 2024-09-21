<?php
session_start();
require_once('../model/adminModel.php');

if (isset($_POST['submit'])) {
    $id = $_COOKIE['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Validate name
    $valid = true;
    for ($i = 0; $i < strlen($name); $i++) {
        if (!((ord($name[$i]) >= 97 && ord($name[$i]) <= 122) || 
              (ord($name[$i]) >= 65 && ord($name[$i]) <= 90) || 
              ord($name[$i]) == ' ')) {
            $valid = false;
            break;
        }
    }

    if (!$valid) {
        echo "<script>alert('Name can only contain alphabetic characters and spaces.');</script>";
    } elseif (strlen($name) <= 2) {
        echo "<script>alert('Name length should be greater than 2.');</script>";
    } else {
        $userinfo = array('id' => $id, 'name' => $name, 'email' => $email);
        $check = updateMyInfo($id, $userinfo);

        if ($check) {
            // Update cookie
            setcookie('name', $name, time() + 3600, '/');

            // Redirect to EditProfile.php
            header('location: ../view/EditProfile.php');
            exit();
        } else {
            echo "<script>alert('Can't update the information.');</script>";
        }
    }
}
?>

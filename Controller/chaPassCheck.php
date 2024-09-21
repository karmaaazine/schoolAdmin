<?php
require_once('../model/adminModel.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['Change'])) {

    if ($_POST['cpas'] == "" || $_POST['npass'] == "" || $_POST['rnpass'] == "") {
        echo "<script> alert('null submission...')</script>";
    } elseif ($_POST['npass'] != $_POST['rnpass']) {
        echo "<script> alert('New password and Retype New password mismatch!')</script>";
    } else {
        session_start();
        $User = getUserById($_COOKIE['id']);
        $id = $User['id'];
        $password = $User['password'];
        $newPass = $_POST['npass'];
        if ($_POST['cpas'] != $password) {
            echo "<script> alert('Your entered current password is wrong')</script>";
        } else {
            if (strlen($newPass) > 7) {
                $specialCharFound = false;
                for ($j = 0; $j < strlen($newPass); $j++) {
                    if (in_array($newPass[$j], ['@', '#', '$', '%', '!'])) {
                        $specialCharFound = true;
                        break;
                    }
                }
                if ($specialCharFound) {
                    $check = changePassword($id, $newPass);
                    if ($check) {
                        header('location: ../Controller/ChangePassword.php');
                    } else {
                        echo "<script> alert('Error occurred!')</script>";
                    }
                } else {
                    echo "<script> alert('Password must contain a special character')</script>";

                }
            } else {
                echo "<script> alert('Password length should be greater than 7')</script>";
            }
        }
    }

} else {
    echo "<script> alert('Form not submitted correctly.')</script>";
}
?>


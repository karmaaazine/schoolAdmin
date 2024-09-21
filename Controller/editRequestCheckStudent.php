<?php
session_start();
require_once('../model/studentModel.php');

if (isset($_POST['update'])) {
    $id = $_SESSION['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $p_address = $_POST['p_address'];

    if (strlen($mobile) == 11) {
        $valid = true;
        for ($i = 0; $i < strlen($name); $i++) {
            if (!((ord($name[$i]) >= 97 && ord($name[$i]) <= 122) || (ord($name[$i]) >= 65 && ord($name[$i]) <= 90) || ord($name[$i]) == ' ')) {
                $valid = false;
                break;
            }
        }

        if ($valid) {
            if (strlen($name) > 2) {
                $userinfo = array('id' => $id, 'name' => $name, 'email' => $email, 'mobile' => $mobile, 'gender' => $gender, 'dob' => $dob, 'p_address' => $p_address);
                $check = updateEditInfo($id, $userinfo);
                if ($check) {
                    $deletemyinfo = deleteEditUserbyid($id);
                    header('location: ../view/viewStudent.php');
                    exit();
                } else {
                    echo "<script>alert('Can't update the Information!');</script>";
                }
            } else {
                echo "<script>alert('Name length should be greater than 2');</script>";
            }
        } else {
            echo "<script>alert('Name can only contain alphabetic characters and spaces');</script>";
        }
    } else {
        echo "<script>alert('Mobile must contain 11 digits and integer number only');</script>";
    }
}
?>

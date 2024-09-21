<?php
session_start();
require_once('../model/teacherModel.php');

if (isset($_POST['update'])) {
    $id = $_SESSION['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $subject = $_POST['subject'];

    $errors = [];

    // Validate mobile number
    if (strlen($mobile) != 11 || !ctype_digit($mobile)) {
        $errors[] = "Mobile number must contain exactly 11 digits and be numeric.";
    }

    // Validate name
    if (strlen($name) <= 2) {
        $errors[] = "Name length should be greater than 2.";
    }
    for ($i = 0; $i < strlen($name); $i++) {
        if (!((ord($name[$i]) >= 97 && ord($name[$i]) <= 122) ||
              (ord($name[$i]) >= 65 && ord($name[$i]) <= 90) ||
              ord($name[$i]) == 32)) { // 32 is the ASCII code for space
            $errors[] = "Name can only contain alphabetic characters and spaces.";
            break;
        }
    }

    // Check if there are any errors
    if (!empty($errors)) {
        echo "<script>alert('" . implode("\\n", $errors) . "');</script>";
    } else {
        $userinfo = array(
            'id' => $id,
            'name' => $name,
            'email' => $email,
            'mobile' => $mobile,
            'gender' => $gender,
            'dob' => $dob,
            'subject' => $subject
        );

        $check = updateMyInfo($id, $userinfo);
        if ($check) {
            echo "<script>alert('Information updated successfully!'); window.location.href='../view/viewTeacher.php';</script>";
        } else {
            echo "<script>alert('Failed to update information.');</script>";
        }
    }
}
?>

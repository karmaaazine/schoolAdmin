<?php
session_start();
include_once('../model/teacherModel.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $id = $_POST['id'];
    $password = $_POST['password'];
    $repass = $_POST['repass'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $subject = $_POST['subject'];

    if ($id == "" || $name == "" || $email == "" || $password == "" || $repass == "" || $subject == "" || $mobile == "" || $gender == "" || $dob == "") {
        echo "<script>alert('Null submission...');</script>";
    } else {
        if ($password == $repass) {
            if (strlen($id) == 4) {
                if (strlen($mobile) == 11) {
                    if (strlen($password) > 7) {
                        $hasSpecialChar = false;
                        for ($j = 0; $j < strlen($password); $j++) {
                            if (in_array($password[$j], ['@', '#', '$', '%', '!'])) {
                                $hasSpecialChar = true;
                                break;
                            }
                        }
                        if ($hasSpecialChar) {
                            $validName = true;
                            for ($i = 0; $i < strlen($name); $i++) {
                                if (!((ord($name[$i]) >= 97 && ord($name[$i]) <= 122) || (ord($name[$i]) >= 65 && ord($name[$i]) <= 90) || ord($name[$i]) == ' ')) {
                                    $validName = false;
                                    break;
                                }
                            }
                            if ($validName) {
                                if (strlen($name) > 2) {
                                    $userinfo = [
                                        'name' => $name,
                                        'mobile' => $mobile,
                                        'email' => $email,
                                        'id' => $id,
                                        'password' => $password,
                                        'gender' => $gender,
                                        'dob' => $dob,
                                        'subject' => $subject
                                    ];

                                    $result = insert($userinfo);
                                    if ($result) {
                                        header('location: ../view/addTeacher.php');
                                        exit(); // Ensure the script stops executing after redirection
                                    } else {
                                        echo "<script>alert('Could not insert user information.');</script>";
                                    }
                                } else {
                                    echo "<script>alert('Name length should be greater than 2');</script>";
                                }
                            } else {
                                echo "<script>alert('Name can only contain alphabetic characters and spaces');</script>";
                            }
                        } else {
                            echo "<script>alert('Password must contain a special character');</script>";
                        }
                    } else {
                        echo "<script>alert('Password length should be greater than 7');</script>";
                    }
                } else {
                    echo "<script>alert('Mobile must contain 11 digits');</script>";
                }
            } else {
                echo "<script>alert('ID must contain exactly 4 digits');</script>";
            }
        } else {
            echo "<script>alert('Password and confirm password do not match');</script>";
        }
    }
}
?>

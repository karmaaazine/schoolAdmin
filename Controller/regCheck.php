<?php
session_start();
include_once('../model/adminModel.php');

if (isset($_POST['signup'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repass = $_POST['repass'];

    if ($id == "" || $name == "" || $email == "" || $password == "" || $repass == "") {
        echo "<script>alert('Null submission...');</script>";
    } else {
        if ($password == $repass) {
            if (strlen($id) == 4) {
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
                                    'id' => $id,
                                    'name' => $name,
                                    'email' => $email,
                                    'password' => $password
                                ];

                                $result = insert($userinfo);
                                if ($result) {
                                    header('location: ../view/adminlogin.php');
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
                echo "<script>alert('ID must contain exactly 4 digits');</script>";
            }
        } else {
            echo "<script>alert('Password and confirm password do not match');</script>";
        }
    }
}
?>

<?php
include_once('../model/adminModel.php');
session_start();

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $password = $_POST['password'];

    if ($id == "" || $password == "") {
        echo "<script>alert('Null submission...');</script>";
    } else {
        $status = validateUser($id, $password);
        if ($status) {
            $profile = getUserbyid($id);
            $name = $profile['name'];
            setcookie('id', $id, time() + 3600, '/');
            setcookie('name', $name, time() + 3600, '/');
            setcookie('flag', true, time() + 3600, '/');
            header('location: ../view/dashboard.php');
            exit(); // Ensure the script stops executing after redirection
        } else {
            echo "<script>alert('Invalid user');</script>";
        }
    }
}
?>

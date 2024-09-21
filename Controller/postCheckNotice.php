<?php
session_start();
include_once('../model/noticeModel.php');

if (isset($_POST['submit'])) {
    $notice = $_POST['notice'];

    if ($notice == "") {
        echo "<script>alert('Null submission...');</script>";
    } else {
        $userinfo = [
            'notice' => $notice
        ];

        $result = insert($userinfo);
        if ($result) {
            header('location: ../view/viewNotice.php');
            exit(); // Ensure the script stops executing after redirection
        } else {
            error_log("Notice insertion failed: " . print_r($userinfo, true)); // Log the error
            echo "<script>alert('Notice insertion failed.');</script>";
        }
    }
}
?>

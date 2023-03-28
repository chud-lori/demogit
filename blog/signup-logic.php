<?php
session_start();
require 'config/database.php';

//get signup form data if signup button was click
if (isset($_POST['submit'])) {
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $createpassword = filter_var($_POST['createpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $confirmpassword = filter_var($_POST['confirmpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $avatar = $_FILES['avatar'];

    if (!$firstname) {
        $_SESSION['signup'] = "Please enter your first name";
    } elseif (!$lastname) {
        $_SESSION['signup'] = "Please enter your last name";
    } elseif (!$username) {
        $_SESSION['signup'] = "Please enter your username";
    } elseif (!$email) {
        $_SESSION['signup'] = "Please enter your email";
    } elseif (strlen($createpassword) < 8 || strlen($confirmpassword) < 8) {
        $_SESSION['signup'] = "Password should be 8+ character";
    } elseif (!$avatar['name']) {
        $_SESSION['signup'] = "Please add avatar";
    } else {
        // check if password dont match
        if ($createpassword !== $confirmpassword) {
            $_SESSION['signup'] = "Passwords do not match";
        } else {
            // hash password 
            $hashed_password = password_hash($createpassword, PASSWORD_DEFAULT);

            // check if username or email already exist in database 
            $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email'";
            $user_check_result = mysqli_query($connection, $user_check_query);
            if (mysqli_num_rows($user_check_result) > 0) {
                $_SESSION['signup'] = 'Username or email already exist';
            } else {
                // work on avatar
                // rename avatar
                $time = time();  //make each image unique using current timestamp
                $avatar_name = $time . $avatar['name'];
                $avatar_tmp_name = $avatar['tmp_name'];
                $avatar_destination_path = 'images/' . $avatar_name;

                // make sure file is an image
                $allowed_files = ['png', 'jpg', 'jpeg'];
                $extention = explode('.', $avatar_name);
                $extention = end($extention);
                if (in_array($extention, $allowed_files)) {
                    // make sure image is not too large (1mb+)
                    if ($avatar['size'] < 1000000) {
                        // upload avatar 
                        move_uploaded_file($avatar_tmp_name, $avatar_destination_path);
                    } else {
                        $_SESSION['signup'] = "File size is too big. Should be less than 1mb";
                    }
                } else {
                    $_SESSION['signup'] = "File should be png, jpg, or jpeg";
                }
            }
        }
    }

    // redirect back to signup page if there was any problem
    if ($_SESSION['signup']) {
        // pass form data back to signup
        $_SESSION['signup'] = $_POST; //post superglobal
        header('location: ' . ROOT_URL . 'signup.php');
        die();
    } else {
        // insert new user into users table
        $insert_user_query = "INSERT INTO users (firstname, lastname, username, email, password, avatar, is_admin)
        VALUES ('$firstname','$lastname', '$username', '$email', '$hashed_password', '$avatar_name', 0)";

        if (!mysqli_errno($connection)) {
            // redirect to login page with success message
            $_SESSION['signup-success'] = "Registration successful. please log in";
            header('location: ' . ROOT_URL . 'signin.php');
            die();
        }
    }
} else {
    // if button wasnt click, bounce back to signup
    header('location:' . ROOT_URL . 'signup.php');
}

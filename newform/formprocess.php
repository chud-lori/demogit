<?php
// print_r($_POST);
include("connection.php");

// define variables and set to empty values
$name_error = $email_error = $phone_error = $url_error = $gender_error = $captcha_error = $dateofbirth_error = "";
$name = $email = $phone = $message = $url = $gender = $captcha_succ = $dateofbirth = "";
$random = rand(1000, 9999);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $name_error = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $name_error = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["email"])) {
        $email_error = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_error = "Invalid email format";
        }
    }

    if (empty(date('Y-m-d', strtotime($_POST["dateofbirth"])))) {
        # the user's date of birth cannot be a null string
        $dateofbirth_error = 'Date of birth is required';
    } elseif (!preg_match('/^[0-9]{1,2}\/[0-9]{1,2}\/[0-9]{4}$/', $dateofbirth)) {
        # Check the format
        $dateofbirth_error = 'The date of birth is invalid date in the format MM/DD/YYYY';
    } elseif (!checkdate($parts[1], $parts[2], $parts[3])) {
        $dateofbirth_error = 'The date of birth is invalid. Please check that the month is between 1 and 12, and the day is valid for that month.';
    }


    if (empty($_POST['phone'])) {
        $phone_error = "Phone is required";
    } else {
        $phone = test_input($_POST["phone"]);
        // check if phone is well-formed
        if (!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i", $phone)) {
            $phone_error = "Invalid phone number";
        }
    }

    if (empty($_POST["url"])) {
        $url_error = "";
    } else {
        $url = test_input($_POST["url"]);
        // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $url)) {
            $url_error = "Invalid URL";
        }
    }

    if (empty($_POST["message"])) {
        $message = "";
    } else {
        $message = test_input($_POST["message"]);
    }

    if (empty($_POST["gender"])) {
        $gender_error = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }

    if (empty($_POST["captcha"])) {
        $captcha_error = "Captcha is empty";
    } else {
        $captcha = $_POST["captcha"];
        $captcharandom = $_POST["captcha_val"];
        if ($captcha != $captcharandom) {
            $captcha_error = "Captcha is not matched";
        } else {;
            $captcha_succ = "captcha is valid";
        }
    }

    // check if error is empty
    if ($name_error == "" and $email_error == "" and $phone_error == "" and $url_error == "" and $gender_error = "" and $dateofbirth_error = "") {
        if (!empty($captcha_succ)) {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $dateofbirth = $_POST["dateofbirth"];
            $phone = $_POST["phone"];
            $url = $_POST["url"];
            $message = $_POST["message"];
            $gender = $_POST["gender"];
            // (name, email, dateofbirth, phone, url, message, gender)
            $sql = "INSERT INTO users (name, email, dateofbirth, phone, url, message, gender)
     VALUES ('$name', '$email','$dateofbirth','$phone','$url','$message','$gender')";
            $query = mysqli_query($conn, $sql);

            if ($query) {
                echo "
        <script>
            alert('data berhasil ditambahkan!');
        </script>
        ";
            } else {
                echo "
        <script>
            alert('data gagal ditambahkan!');

        </script>
        ";
            }
        }
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

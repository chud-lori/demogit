<?php
print_r($_POST);
include("connection.php");

// define variables and set to empty values
$name_error = $email_error = $phone_error = $url_error = $gender_error = $captcha_error = $dateofbirth_error = "";
$name = $email = $phone = $message = $url = $gender = $captcha1 = $dateofbirth = "";
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
        $url = "";
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

    if (isset($_POST['captcha'])) {
        $captcha = $_POST['captcha'];
        $random = $_POST['captcha_val'];
        if ($captcha != $random) {
            $captcha_error = "Captcha is invalid";
        } else {
            $captcha1 = "Captcha is valid";
        }
    }


    // if (isset($_POST['captcha'])) {
    //     $captcha = $_POST['captcha'];
    //     $random = $_POST['captcha_val'];
    //     if ($captcha != $random) {
    //         echo "<script>
    //     alert('Kamu memasukkan captcha yang salah');
    //     </script>";
    //     } else {
    //         echo "<script>
    //     alert('Captcha valid');
    //     </script>";
    //     }
    // }


    // check if error is empty
    if ($name_error == "" and $email_error == "" and $phone_error == "" and $url_error == "" and $gender_error = "" and $dateofbirth_error = "") {
        $message_body = "";
        unset($_POST['submit']);
        foreach ($_POST as $key => $value) {
            $message_body .= "$key: $value\n";
        }
    }

    // submit 
    $name = $_POST["name"];
    $email = $_POST["email"];
    $dateofbirth = $_POST["dateofbirth"];
    $phone = $_POST["phone"];
    $url = $_POST["url"];
    $message = $_POST["message"];
    $gender = $_POST["gender"];
    // (name, email, dateofbirth, phone, url, message, gender)
    $sql = "INSERT INTO users (id, name, email, dateofbirth, phone, url, message, gender)
     VALUES ('', '$name', '$email','$dateofbirth','$phone','$url','$message','$gender')";
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

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

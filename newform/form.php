<?php
include('formprocess.php');
?>

<!DOCTYPE html>
<html>

<head>
    <title>Form Contact</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <form id="contact" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
            <h3>Quick Contact</h3>
            <h4>Contact us today, and get reply with in 24 hours!</h4>
            <fieldset>
                <input placeholder="Your name" type="text" name="name" value="<?= $name ?>" tabindex="1" autofocus>
                <span class="error"><?= $name_error ?></span>
            </fieldset>
            <fieldset>
                <input placeholder="Your Email Address" type="text" name="email" value="<?= $email ?>" tabindex="2">
                <span class="error"><?= $email_error ?></span>
            </fieldset>
            <fieldset>
                <input placeholder="Your Date of Birth" type="date" name="dateofbirth" value="<?= $dateofbirth ?>" tabindex="2">
                <span class="error"><?= $dateofbirth_error ?></span>
            </fieldset>
            <fieldset>
                <input placeholder="Your Phone Number" type="text" name="phone" value="<?= $phone ?>" tabindex="3">
                <span class="error"><?= $phone_error ?></span>
            </fieldset>
            <fieldset>
                <input placeholder="Your Web Site starts with http://" type="text" name="url" value="<?= $url ?>" tabindex="4">
                <span class="error"><?= $url_error ?></span>
            </fieldset>
            <fieldset>
                <textarea placeholder="Type your Message Here...." type="text" name="message" value="<?= $message ?>" tabindex="5"></textarea>
            </fieldset>
            <fieldset>
                <p>Gender</p>
                <input type="radio" name="gender" value="female">Female
                <input type="radio" name="gender" value="male">Male
                <p><span class="error"><?= $gender_error ?></span></p>
            </fieldset>
            <fieldset>
                <li>
                    <label for="captcha">Captcha <span><?= $random ?></span></label>
                    <input type="text" id="captcha" name="captcha" placeholder="Enter Captcha Here" data-parsley-equaalto="#password" data-parsley-trigger="keyup">
                    <input type="hidden" name="captcha_val" value="<?= $random ?>">
                </li>
                <span class="error"><?= $captcha_error ?></span>
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
            </fieldset>
        </form>


    </div>
</body>

</html>
<?php
include 'partials/header.php';
?>

<!-- ======================================= End of Nav ============================================================================ -->

<section class="form__section">
    <div class="form__section-container">
        <h2>Add Category</h2>
        <div class="alert__message success">
            <p>This is an success message</p>
        </div>
        <form action="" enctype="multipart/form-data">
            <input type="text" value="" placeholder="Username or Email">
            <input type="password" value="" placeholder="Create Password">

            <button type="submit" class="btn">Sign In</button>
            <small>Don't have an account? <a href="signup.html">Sign Up</a></small>
        </form>
    </div>
</section>

<!-- ======================================= End of Form ============================================================================ -->

<?php
include '../partials/footer.php';
?>
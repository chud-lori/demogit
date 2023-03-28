<?php
include 'partials/header.php';
?>
<!-- ======================================= End of Nav ============================================================================ -->

<section class="form__section">
    <div class="form__section-container">
        <h2>Add User</h2>
        <div class="alert__message success">
            <p>This is an success message</p>
        </div>
        <form action="" enctype="multipart/form-data">
            <input type="text" value="" placeholder="First Name">
            <input type="text" value="" placeholder="Last Name">
            <input type="text" value="" placeholder="Username">
            <input type="email" value="" placeholder="Email">
            <input type="password" value="" placeholder="Create Password">
            <input type="password" value="" placeholder="Confirm Password">
            <select name="" id="">
                <option value="0">Author</option>
                <option value="1">Admin</option>
            </select>


            <div class="form__control">
                <label for="avatar">User Avatar</label>
                <input type="fie" id="avatar">
            </div>


            <button type="submit" class="btn">Add User</button>

        </form>
    </div>
</section>

<!-- ======================================= End of Form ============================================================================ -->

<?php
include '../partials/footer.php';
?>
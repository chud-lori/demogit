<?php
include 'partials/header.php';
?>
<!-- ======================================= End of Nav ============================================================================ -->

<section class="form__section">
    <div class="form__section-container">
        <h2>Edit User</h2>
        <div class="alert__message success">
            <p>This is an success message</p>
        </div>
        <form action="" enctype="multipart/form-data">
            <input type="text" value="" placeholder="First Name">
            <input type="text" value="" placeholder="Last Name">
            <select name="" id="">
                <option value="0">Author</option>
                <option value="1">Admin</option>
            </select>
            <button type="submit" class="btn">Update User</button>

        </form>
    </div>
</section>

<!-- ======================================= End of Form ============================================================================ -->

<?php
include '../partials/footer.php';
?>
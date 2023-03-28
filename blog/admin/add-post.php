<?php
include 'partials/header.php';
?>
<!-- ======================================= End of Nav ============================================================================ -->

<section class="form__section">
    <div class="form__section-container">
        <h2>Add Post</h2>
        <div class="alert__message success">
            <p>This is an success message</p>
        </div>
        <form action="" enctype="multipart/form-data">
            <input type="text" value="" placeholder="Title">
            <select name="" id="">
                <option value="1">Travel</option>
                <option value="1">Art</option>
                <option value="1">Science & Technology</option>
                <option value="1">Travel</option>
                <option value="1">Travel</option>
                <option value="1">Travel</option>
            </select>
            <textarea row="10" placeholder="body"></textarea>
            <div class="form__control inline">
                <input type="checkbox" id="is__featured">
                <label for="is__featured" checked>Featured</label>
            </div>
            <div class="form__control">
                <label for="thumbnail">Add Thumbnail</label>
                <input type="fie" id="thumbnail">
            </div>


            <button type="submit" class="btn">Add Post</button>

        </form>
    </div>
</section>

<!-- ======================================= End of Form ============================================================================ -->

<?php
include '../partials/footer.php';
?>
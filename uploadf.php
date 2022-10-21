<!-- /**
 * Author:    Rohan
 * Created:   27.09.2022
 * 
 * (c) Copyright by Dword Core.
 **/ -->
<div class="box">


        <form action="upload.php" method="post" enctype="multipart/form-data">


            <div class="box__input">
                <svg class="box__icon" xmlns="http://www.w3.org/2000/svg" width="50" height="43" viewBox="0 0 50 43">
                    <path d="M48.4 26.5c-.9 0-1.7.7-1.7 1.7v11.6h-43.3v-11.6c0-.9-.7-1.7-1.7-1.7s-1.7.7-1.7 1.7v13.2c0 .9.7 1.7 1.7 1.7h46.7c.9 0 1.7-.7 1.7-1.7v-13.2c0-1-.7-1.7-1.7-1.7zm-24.5 6.1c.3.3.8.5 1.2.5.4 0 .9-.2 1.2-.5l10-11.6c.7-.7.7-1.7 0-2.4s-1.7-.7-2.4 0l-7.1 8.3v-25.3c0-.9-.7-1.7-1.7-1.7s-1.7.7-1.7 1.7v25.3l-7.1-8.3c-.7-.7-1.7-.7-2.4 0s-.7 1.7 0 2.4l10 11.6z" />
                </svg>
                <input type="file" name="upFile" class="btn btn-danger" accept=".png,.gif,.jpg,.webp" required>
                <br>
                <label for="file">
                    <br>
                    <strong class="text-light">Choose a file</strong><span class="box__dragndrop" style="color:white;"> or drag it here</span>.</label>
                <br>
            </div>
    <br>
    <br>
    <div class="d-flex justify-content-center border border-3 border-danger  text-light" style="background-color:black;border-style: ridge;border-width: thick;">
        <div class=" row g-3 align-items-center d-flex justify-content-center">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="col-auto">
                <select class="btn btn-outline-danger dropdown-toggle " type="button" data-bs-toggle="dropdown" aria-expanded="false" placeholder="Select Category" name="cat_val">
                    <ul class="dropdown-menu">
                        <option value="" selected disabled hidden>Categories</option>
                        <?php include('fetch_categories.php'); ?>
                    </ul>
                </select>
            </div>
            <div class="col-auto">
                <label for="subject" class="col-form-label">Subject:</label>
            </div>
            <div class="col-auto">
                <input type="text" id="inputPassword6" class="form-control" name="subject">
            </div>
            <br>
            <div class="">
                <label for="Content" class="col-form-label">Content:</label>
            </div>
            <div class="col-auto">
                <textarea cols="50" rows="4" placeholder="Type your content here." class="form-control" name="content"></textarea>
            </div>

            <br>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-danger btn-lg" name="submit">Upload</button>
            </div>
            <br>
            <br>
            <br>
        </div>
    </div>

    </form>
</div>
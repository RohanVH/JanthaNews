<div class="container justify-content-center">
    <h1 class="text-center"> <u>Add Contents</u></h1><br>
    <div class="text-center border border-3 border-danger text-light" style="background-color:black;">
        <br>
        <br>

        <form action="add_cat_db.php" method="post">

            <select class="btn btn-outline-danger dropdown-toggle rounded-pill" type="button" data-bs-toggle="dropdown" aria-expanded="false" placeholder="Select Category">
                <ul class="dropdown-menu">
                    <option value="" selected disabled hidden>Categories</option>
                    <?php include('fetch_categories.php'); ?>
                </ul>
            </select>
            <br>
            <br>
            <div class="d-flex justify-content-center border border-3 border-danger text-light" style="background-color:white;border-style: ridge;border-width: thick;">
                <br>
                <br>
                <br>
                <br>
                <br>
                <div class="text-dark">
                    <br>
                    <br>
                    <div class=" row g-3 align-items-center d-flex justify-content-center">
                        <div class="col-auto">
                            <label for="addcat" class="col-form-label">Add Content:</label>
                        </div>
                        <div class="col-auto">
                            <textarea cols="50" rows="4" placeholder="Type your content here." class="form-control" name="content"></textarea>
                        </div>
                    </div>


                    <br>
                    <br>
                </div>

            </div>
            <div class=" row g-3 align-items-center d-flex justify-content-center">
                <div class="col-auto">
                    <button type="submit" class="btn btn-danger rounded-pill" name="addcontent">Add</button>
                </div>
            </div>

        </form>
        <br>
        <br>
        <br>
        <br>

    </div>
</div>
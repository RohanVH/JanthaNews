<!-- /**
 * Author:    Rohan
 * Created:   27.09.2022
 * 
 * (c) Copyright by Dword Core.
 **/ -->
<div class="container justify-content-center">
    <h1 class="text-center"> <u>Add/Delete Categories</u></h1><br>


    <div class="d-flex justify-content-center border border-3 border-danger text-light" style="background-color:black;border-style: ridge;border-width: thick;">
        <br>
        <br>
        <form action="add_cat_db.php" method="post">
            <div class=" row g-3 align-items-center d-flex justify-content-center">
                <div class="col-auto">
                    <label for="addcat" class="col-form-label"><u>Create New Category</u></label>
                </div>
                <div class="col-auto">
                    <input type="text" id="inputPassword6" class="form-control" name="addcat" placeholder="type here">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-danger rounded-pill" name="add">ADD</button>
                </div>
            </div>
        </form>

        <hr style="width: 1px; height: 200px; display: inline-block;">
        <div>

            <form action="delete_cat_db.php" method="post">
            <div class=" row g-3 align-items-center d-flex justify-content-center">
                <div class="col-auto">
                    <label for="addcat" class="col-form-label"><u>Delete Category</u></label>
                </div>
                <div class="col-auto">
                    <select class="btn btn-outline-danger dropdown-toggle rounded-pill" type="button" data-bs-toggle="dropdown" aria-expanded="false" name="select">
                        <ul class="dropdown-menu">
                            <option value="" selected disabled hidden>Categories</option>
                            <?php include('fetch_categories.php'); ?>
                        </ul>
                    </select>
                </div>
                <br>
                <div class="">
                    <button type="submit" class="btn btn-danger rounded-pill" name="delete">delete</button>
                    <br>
                </div>
                <br>
                </form>
            </div>

        </div>

        <br>
        <br>
    </div>
</div>
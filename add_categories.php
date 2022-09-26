<div class="container justify-content-center">
<h1 class="text-center"> <u>Add/Delete Categories</u></h1><br>
    <form action="add_cat_db.php" method="post">
    
    <div class="d-flex justify-content-center border border-3 border-danger text-light"
            style="background-color:black;border-style: ridge;border-width: thick;">
            <br>
            <br>
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

            <hr style="width: 1px; height: 250px; display: inline-block;">
        <form action="delete_cat_db.php" method="post"></form>
            <div class=" row g-3 align-items-center d-flex justify-content-center"> 
                <div class="col-auto">
                    <label for="addcat" class="col-form-label"><u>Delete Category</u></label>
                </div>
                <div class="col-auto">
                    <button class="btn btn-outline-danger dropdown-toggle rounded-pill" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">Select Category</button>
                    <ul class="dropdown-menu">
                        <?php include('fetch_categories.php');?>
                    </ul>
                </div>
                <br>
                <div class="">
                    <button type="submit" class="btn btn-danger rounded-pill" name="delete">delete</button>
                    <br>
                </div>
                <br>
            </div>
              
        </div>

    </form>
    <br>
    <br>
</div>
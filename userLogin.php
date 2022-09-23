<?php include('header.php'); ?>

<br><br>

<!-- login form -->

<div class="border border-3 border-danger rounded-pill" style="background-color:black;border-style: ridge;border-width: thick;">
    <br>
    <div id="login" class="tabcontent">
        <p class="h2 justify-content-center"
        style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif ;text-align: center; color:white"><b
            id="hover-underline-animation">USER LOGIN</b></p>
        <br>
        <div class="d-grid gap-2 col-6 mx-auto">
            
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#signin">
                SIGNIN
            </button>
            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#signup">
                SIGNUP
            </button>
            
            
            <!-- signin -->
            <div class="modal fade" id="signin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header "
                        style="background-image: url(img/rb.jpg);background-repeat: no-repeat;background-size:500px;background-position: center;">

                            <h3 class="modal-title" id="staticBackdropLabel"><b
                                    style="color:white;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
                                    SIGNIN</b></h3>
                            <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal"
                                aria-label="Close"></button>

                        </div>

                        <!-- form -->
                        <form action="signin.php" method="post">
                            <div class="modal-body"
                                style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
                                
                                <label class="form-label text-dark">Email:</label>
                                <input type="email" class="form-control" name="email" required>
                                <br>
                                <label class="form-label text-dark">Password:</label>
                                <input type="password" class="form-control" name="password" required>
                                <br>
                                <p style="text-align: end;"><a href="forgotpassword.html"
                                    style="color:white;text-decoration: none;">Forgot
                                    Password?</a></p>
                                </div>
                                <div class="modal-footer justify-content-center" style="background-color:black;">
                                    <div class="d-grid gap-2 col-6 mx-auto ">
                                        <button class="btn btn-danger" type="submit" name="submit">Signin</button>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
            
            <!-- signup -->
            <div class="modal fade" id="signup" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header d-flex justify-content-center"
                        style="background-image: url(img/rb.jpg);background-repeat: no-repeat;background-size:500px;background-position: center;">
                        <h3 class="modal-title" id="staticBackdropLabel"><b
                            style="color:white;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
                            SIGNUP</b></h3>
                            <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                        </div>
                        <form action="signup.php" method="post">
                            <div class="modal-body"
                                style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
                                <!-- form -->
                                <label class="form-label text-dark ">Name:</label>
                                <input type="text" class="form-control" name="name" required>
                                <br>
                                <label class="form-label text-dark">Email:</label>
                                <input type="email" class="form-control" name="email" required>
                                <br>
                                <label class="form-label text-dark">Contact no:</label>
                                <input type="tel" class="form-control" value="+91" name="contactno" required>
                                <br>
                                <label class="form-label text-dark">Password:</label>
                                <input type="password" class="form-control" name="password" required>
                                <br>
                                <label class="form-label text-dark">Confirm Password:</label>
                                <input type="password" class="form-control" name="cpassword" required>
                            </div>
                            <div class="modal-footer justify-content-center" style="background-color:black;">
                                <div class="d-grid gap-2 col-6 mx-auto ">
                                    <button class="btn btn-danger" type="submit" name="submit">Signup</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>
<br>
<br>
<hr>
<?php include('footer.php'); ?>
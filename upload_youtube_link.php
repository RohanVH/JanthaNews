<?php include("header.php");
?>
<div style="background-color:black;" class="container text-center">
    <form action="upload_link.php" method="post">
        <center><h3 class="text-danger">Upload youtube videos</h3></center><br>
        <label for="inputPassword5" class="form-label text-light">Paste the link below⬇️:</label><br>
        <input class="form-control" type="text" name="link" placeholder="paste here"></textarea>
        <br>
        <button class="btn-danger rounded-pill" type="submit" name="submit">upload🔝</button>
        <br>
        <br>
        <button class="btn-danger rounded-pill" type="submit" name="clear">Delete all uploaded videos <i class="fa fa-trash"></i> </button>
    </form>
    <br>
</div>
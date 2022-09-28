<?php include('header.php'); ?>
<div class="container-fluid">
    <div class="container">
        <nav class="breadcrumb bg-transparent m-0 p-0">
            <a class="breadcrumb-item text-danger" href="homepage.php">Home</a>
            <span class="breadcrumb-item active">Gallery</span>
        </nav>
    </div>
</div>
<!-- Breadcrumb End -->
<br>
<style>
    .column {
        float: left;
        width: 25%;
        padding: 10px;
    }

    .column img {
        opacity: 0.8;
        cursor: pointer;
    }

    .column img:hover {
        opacity: 1;
    }

    .row:after {
        content: "";
        display: table;
        clear: both;
    }
</style>
<div class="container bg-dark">
    
    <h1 class="text-center text-light"><u class="text-danger"><span class="text-danger">G</span><span class="text-light">allery </span></u></h1>
    <br>
    <div class="container bg-dark d-flex justify-content-center">
        <hr style="color:white;">
        <!-- Breadcrumb Start -->
        <div class="row d-flex justify-content-center">
            <?php include("fdata.php"); ?>
        </div>
        <br>
    </div>
</div>
<?php include('footer.php'); ?>
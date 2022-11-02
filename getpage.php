<!-- /**
 * Author:    Rohan
 * Created:   27.09.2022
 * 
 * (c) Copyright by Dword Core.
 **/ -->
<style>
    #header {
        background-color: #f1f1f1;
        /* Grey background */
        padding: 20px 10px;
        /* Some padding */
        color: red;
        text-align: center;
        /* Centered text */
        font-size: 35px;
        /* Big font size */
        font-weight: bold;
        position: sticky;
        /* Fixed position - sit on top of the page */
        top: 0;
        width: 100%;
        /* Full width */
        transition: 0.2s;
        /* Add a transition effect (when scrolling - and font size is decreased) */
    }

    div.content {
        background-color: black;
        color: white;
    }

    p {
        overflow: auto;
        overflow-wrap: break-word;
        text-align: center;
        /* inline-size: 100%; */
        padding: 25px;
        overflow-wrap: break-word;

    }

    /* If the screen size is 601px wide or more, set the font-size of <div> to 80px */
    @media screen and (min-width: 601px) {
        p {
            font-size: 35px;
        }
    }

    /* If the screen size is 600px wide or less, set the font-size of <div> to 30px */
    @media screen and (max-width: 600px) {
        p {
            font-size: 40px;
        }
    }

    .img {
        width: 50%;
        height: 50%;

    }
</style>
<script>
    // When the user scrolls down 50px from the top of the document, resize the header's font size
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            document.getElementById("header").style.fontSize = "26px";
        } else {
            document.getElementById("header").style.fontSize = "30px";
        }
    }
</script>
<?php
include("db_config.php");
$fetch_query = "SELECT * from datafile ORDER BY id DESC";
$sql = mysqli_query($connectdb, $fetch_query);
$row = mysqli_num_rows($sql);
if ($row > 0) {
    while ($video = mysqli_fetch_assoc($sql)) {

?>
        <div style="background-color:gray;">
            <center><img src="uploads/<?= $video["file_url"] ?>" class="img" alt="..." onerror=this.src="logo/noimage.gif" id="<?= $video["subject"] ?>">
                
                
            </center>

            <div id="<?= $video["file_url"] ?>" class="content">
                <div id="header"><?= $video["subject"] ?></div>
                <p class=""><?= $video["content"] ?></p>
                <p class="card-text"><small class="text-muted d-flex justify-content-end">-<?= $video["categories"] ?></small></p>
            </div>
            <br>
            <hr style="color:white;">
            <br>
        </div>



<?php
    }
} else {
    echo '<li class="nav-item btn btn-outline-danger text-danger">';
    echo "No Categories";
    echo "</li>";
}
?>
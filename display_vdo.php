
<?php
include_once("db_config.php");
include_once("test.php");
$sql = "SELECT * FROM youtube ORDER BY id DESC";
$result = mysqli_query($connectdb, $sql);
$row = mysqli_num_rows($result);
                                    
?>
<style>

.container{ 

display: flex;
gap: 70px;
position: absolute;
flex-wrap: wrap;
width: 100%;
}

.zoom {
transition: transform 0.3s ease-out; /* Animation */

margin: 0 auto;
}

.zoom:hover {
transform: scale(1.2); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}                          

</style>  
    
<div class="container-fluid d-flex justify-content-center ml-50" style="">
<div class="row flex-row">
        <?php
            if ($row > 0) {
                while ($link = mysqli_fetch_assoc($result)) {

                    $youtubeEmbed = preg_replace_callback($youtubePattern, "youtubeEmbedCallback", $link['links']);
                        echo '<div class="col zoom">';
                        echo $youtubeEmbed;
                        echo '</div>';
                }
            }
        ?>
    </div>
</div>
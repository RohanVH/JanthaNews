<!-- /**
 * Author:    Rohan
 * Created:   27.09.2022
 * 
 * (c) Copyright by Dword Core.
 **/ -->
<?php
    include("db_config.php");
    $fetch_query="SELECT * from category";
    $sql = mysqli_query($connectdb, $fetch_query);
    $row=mysqli_num_rows($sql);
    if($row>0){
            while ($row = mysqli_fetch_assoc($sql)) {
                
                $list = $row['categories'];
                
                    // Creating category php files
                $myfile = fopen("$list.php", "w") or die("Unable to open file!");

            }
                    $headerInclude = "<?php include('header.php');?>\n";
                    $heading = "<center class='h1'><u class='text-danger'>". strtoupper($list)."</u></center>\n";
                    
                    $footerInclude = "<?php include('footer.php');?>\n";
                    fwrite($myfile,$headerInclude);
                    fwrite($myfile,$heading);
                    $data = "SELECT * from datafile where `categories`='" . $list . "'";
                    $run = mysqli_query($connectdb,$data);
                    $img = mysqli_num_rows($run);
                    if($img>0){

                        while ($imglist = mysqli_fetch_assoc($run)) {

                            $body = '<style>
                                       

                                        #img {
                                            z-index: 0;
                                            transition: transform .2s;
                                            /* Animation */
                                            margin: 0 auto;
                                            resize: both;
                                            word-wrap: break-word;

                                        }

                                        #img:hover {
                                            transform: scale(1.0);
                                        }
                                        p,#p1,#p2,div.h6,div.card-text,div {
                                        word-wrap: break-word;
                                        text-align:center;
                                        word-break: break-all;
                                        }
                                        #p2{
                                            color:black;
                                        }
                                    </style>
                            <div class="row row-cols-1 row-cols-md-1 g-4 border border-3 text-center d-flex-justify-content-center" style="background-color:black;padding: 60px;">
                                        <?php
                                        include "db_config.php";
                                        $sql = "SELECT * FROM datafile ORDER BY id DESC";
                                        $subjectquery = "SELECT * FROM datafile where `subject`";
                                        $res = mysqli_query($connectdb, $sql);

                                        if (mysqli_num_rows($res) > 0) {
                                            while ($imglist = mysqli_fetch_assoc($res)) {

                                        ?>

                                                <div class="col-sm-4 d-flex justify-content-center text-center">
                                            
                                            <div id="img" class="card bg-light d-flex justify-content-center" style="width: 45rem;border:ridge;border-color:white;" id="<?= $imglist["subject"] ?>">
                                                
                                                <img src="uploads/<?= $imglist["file_url"] ?>" class="card-img-top d-flex center" onerror=this.src="logo/noimage.gif">
                                                <div class="container card-body text-center">
                                                    <p class="card-title text-center text-danger" id="p1"><u class="h3 text-danger" id="title"><?= $imglist["subject"] ?></u></p>
                                                    <hr style="color:black;">
                                                    <p class="card-text text-center text-dark" id="p2"><p><?= $imglist["content"] ?></p></p>
                                                    <p class="h6 card-text text-muted d-flex justify-content-end">-<?= $imglist["categories"] ?></p>
                                                </div>
                                            </div>
                                        
                                    </div>

                                <?php
                                }

                                echo "</div>";
                            } else {
                                ?>
                                <div class="carousel-item active justify text-danger text-center" data-bs-interval="2000">
                                    <img src="logo/noimage.gif" class="d-block w-100" alt="error" style="width:200px;height:250px;">
                                    <?php
                                    echo "<h4>No Data Found</h4>";
                                    ?>
                                </div>
                                <br>
                            <?php
                            }
                            ?>';
                            
                            fwrite($myfile, $body);
                        }
                    }
                    else{
                            $body= '<br><br><br><p class="h1 text-center text-dark"><q class="bg-warning"><span class="blink_me">
                            No Images</span></q>
                            </p>';
                            fwrite($myfile, $body);
                            fwrite($myfile, $footerInclude);
                       }
        
                       
                
            }
 fwrite($myfile, $footerInclude);
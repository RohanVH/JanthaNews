<?php
    include("db_config.php");
    $fetch_query="SELECT * from category";
    $sql = mysqli_query($connectdb, $fetch_query);
    $row=mysqli_num_rows($sql);
    if($row>0){

            while ($row = mysqli_fetch_assoc($sql)) {
                
                $list = $row['categories'];
                echo '<li class="nav-item text-center">';
                echo '<a class="nav-link btn btn-outline-danger" href='.$list.'.php>';
                            echo $list;
                echo "</a></li>";
                
                    // Creating category php files
                    $myfile = fopen("$list.php", "w") or die("Unable to open file!");
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

                            $body = '<figure class="container-fluid d-flex justify-content-center"><img src="uploads/' . $imglist['file_url'] . '" class="img-fluid d-flex justify-content-center">
                            <figcaption>
                                <blockquote class="text-center text-light">' . $imglist['subject'] . '</blockquote>
                                <blockquote class="text-center text-light">' . $imglist['content'] . '
                                    <hr>
                                </blockquote>
                            </figcaption>   
                        </figure>';
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
    }
    else{
        echo '<li class="nav-item btn btn-outline-danger text-danger">';
        echo "No Categories";
        echo "</li>";
    }
    ?>

<!-- /**
 * Author:    Rohan
 * Created:   27.09.2022
 * 
 * (c) Copyright by Dword Core.
 **/ -->
<?php
$targetsite = "https://www.inshorts.com/hi/read";
$inshorts = file_get_html($targetsite);
foreach ($inshorts->find('a.clickable') as $ele) {
    echo '<br><b class="h5 text-center text-light">'.$ele->plaintext.'</b>' . '<br><br>';
}
?>
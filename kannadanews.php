<!-- /**
 * Author:    Rohan
 * Created:   27.09.2022
 * 
 * (c) Copyright by Dword Core.
 **/ -->
<?php
include_once('phpDOM/simple_html_dom.php');
$targetsite = "https://www.sumanasa.com/kannadanews/";
$inshorts = file_get_html($targetsite);
foreach ($inshorts->find('li.newsheadline') as $ele) {  
    echo '<br><b class="h5 text-center text-light">'.$ele->plaintext.'</b>' . '<br><br>';
}
?>
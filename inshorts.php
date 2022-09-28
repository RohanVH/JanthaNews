<?php
// include('phpDOM/simple_html_dom.php');
$targetsite = "https://www.inshorts.com/en/read";
$inshorts = file_get_html($targetsite);
foreach ($inshorts->find('a.clickable') as $ele) {
    echo '<br><b class="h5">'.$ele->plaintext.'</b>' . '<br><br>';
}
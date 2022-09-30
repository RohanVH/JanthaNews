<?php
$targetsite = "https://www.inshorts.com/en/read";
$inshorts = file_get_html($targetsite);
foreach ($inshorts->find('a.clickable') as $ele) {
    echo '<br><b class="h5 text-center text-light">'.$ele->plaintext.'</b>' . '<br><br>';
}
?>
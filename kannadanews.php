<?php
$targetsite = "https://kannada.news18.com/";
$inshorts = file_get_html($targetsite);
foreach ($inshorts->find('h3.jsx-3616997551') as $ele) {
    echo '<br><b class="h5 text-center text-light">'.$ele->plaintext.'</b>' . '<br><br>';
}
?>
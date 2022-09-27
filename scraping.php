<?php
include('phpDOM/simple_html_dom.php');
$count=0;
$website= "https://www.indiatoday.in/india?page=."."$count";
$html=file_get_html($website);
$targetsite= "https://www.inshorts.com/en/read";
$inshorts=file_get_html($targetsite);
// foreach ($inshorts->find('a.clickable') as $ele) {
//     echo '<b>'.$ele->plaintext.'</b>' . '<br>';
// }
// echo "<hr>";
// foreach ($html->find('div.detail') as $e) {
//     echo '<b>' . $e-> plaintext . '</b>' . '<br>';
// }
// ?>  
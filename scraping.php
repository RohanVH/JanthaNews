<!-- /**
 * Author:    Rohan
 * Created:   27.09.2022
 * 
 * (c) Copyright by Dword Core.
 **/ -->
<?php
include_once('phpDOM/simple_html_dom.php');
$count=0;
$website= "https://www.indiatoday.in/india?page=."."$count";
$html=file_get_html($website);
$targetsite= "https://www.inshorts.com/en/read";
$inshorts=file_get_html($targetsite);
 ?>  
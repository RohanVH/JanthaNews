<?php

// $youtubeUrl = 'https://youtu.be/kJL8Fz1qQo0';
$youtubePattern = "/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i";
function youtubeEmbedCallback($matches) {
    if (!isset($matches[2])) {
        return '';
    }
    $videoId = $matches[2];
    return '<iframe width="300" height="200" src="https://www.youtube.com/embed/' . $videoId . '" frameborder="0" allowfullscreen></iframe>';
}
// $youtubeEmbed = preg_replace_callback($youtubePattern, "youtubeEmbedCallback", $youtubeUrl);
// echo $youtubeEmbed;
//Stamperà:
//<iframe width="560" height="315" src="https://www.youtube.com/embed/1cQh1ccqu8M" frameborder="0" allowfullscreen></iframe>
?>
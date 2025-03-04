<?php

function modifyCloudinaryUrl($url, $transformation) {
    return preg_replace('/\/upload\//', "/upload/{$transformation}/", $url, 1);
}

?>
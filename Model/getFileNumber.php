<?php

function getFileNumber($dir){

    $file = glob($dir."*.jpg");
    return count($file);
}


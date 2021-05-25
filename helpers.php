<?php

function getFirstSentence($content) {
    $content = \Illuminate\Support\Str::replaceFirst(PHP_EOL, '.', $content);

    $content = html_entity_decode(strip_tags($content));
    $pos = strpos($content, '.');


    if($pos === false) {
        return $content;
    }
    else {
        return substr($content, 0, $pos+1);
    }
}

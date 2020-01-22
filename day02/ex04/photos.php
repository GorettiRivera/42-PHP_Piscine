#!/usr/bin/php
<?php
function file_get_contents_curl($html) { 
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_HEADER, 0); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_URL, $html); 
    $data = curl_exec($ch); 
    curl_close($ch); 
    return $data; 
} 
if ($argc <> 2)
    exit();
$html = $argv[1];
$data = file_get_contents_curl($html); 
$preg = preg_match('/<img[^>]+src=([^\s>]+)/',$data, $matches);
file_put_contents('file.txt', $matches[1]); 
?>
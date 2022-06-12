<?php

$stories = [];
$file = __DIR__.'/stories.json';

if(file_exists($file)) {
  $stories = json_decode(file_get_contents($file));
}

header('Content-type: application/json');
echo json_encode($stories);

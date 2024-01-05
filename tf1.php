<?php

header('Content-Type: application/x-mpegURL');

$streamUrl = 'http://livetv.ktv.zone/3/play.m3u8';

$stream = fopen($streamUrl, 'r');

$streamContent = stream_get_contents($stream);

fclose($stream);

echo $streamContent;
?>

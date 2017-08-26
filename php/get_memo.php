<?php

// Initialize
include_once('common.php');

$memo = file_get_contents('memo.dat');
$filename = "memo.dat";
$updated = date("F d Y H:i:s.", filemtime($filename));

Response::send(['memo' => $memo, 'updated' => $updated]);


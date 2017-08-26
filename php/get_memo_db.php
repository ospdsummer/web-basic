<?php

// Initialize
include_once('common.php');
$db = new DB();

 
//$db->insert('Insert into memo values (NULL, "ほげ")');
$memo = $db->select('SELECT id, text FROM memo WHERE text LIKE "%メモ%"');
Response::send($memo);

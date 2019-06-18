<?php

$db = new PDO('sqlite:sqlite.db');

$stmt = $db->prepare('SELECT * FROM posts');
$stmt->execute();
$result_array = $stmt->fetchAll(PDO::FETCH_ASSOC);

print_r($result_array);

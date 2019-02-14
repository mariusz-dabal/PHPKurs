<?php

$dsn = 'mysql:dbname=bai;host=localhost';
$pdo = new PDO($dsn, 'homestead', 'secret');

var_dump($pdo);

$msqli = newmysqli('localhost', 'homestead', 'secret', 'bai' );

var_dump($msql);
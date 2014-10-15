<?php

$dsn = 'mysql:dbname=teamug;host=127.0.0.1';
$user = 'root';
$password = 'cs014a1536';

$dbh = new PDO($dsn, $user, $password);

var_dump($dbh->errorInfo());


$sth = $dbh->prepare('SELECT * FROM website WHERE website_id < ?');
$sth->execute($get->asArray('forename,surname,telephone,email'));
var_dump($sth->queryString);

$a = $sth->fetchObject();
var_dump($a);

$a = $sth->fetchObject();
var_dump($a);

$a = $sth->fetchObject();
var_dump($a);
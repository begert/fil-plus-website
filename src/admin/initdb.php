<?php
$stmts = array(
    "drop table if exists news",
    "create table news (
     id integer primary key autoincrement,
     title text,
     text text,
     date integer)",
    );

$db = new SQLite3("db.db");
foreach($stmts as $stmt) {
    echo $stmt.";<br>";
    $db->exec($stmt); 
}

?>

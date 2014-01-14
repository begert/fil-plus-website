<?php

$db = new SQLite3('test.db');

$results = $db->query('select * from news');
while ($row = $results->fetchArray()) {
    var_dump($row);
}

?>

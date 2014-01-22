<?php
include_once("params.inc.php");

$stmts = array(
    "drop table if exists news",
    "create table news (
     id int not null auto_increment primary key,
     title varchar(100),
     text varchar(8000),
     date datetime)",
    );
$db = new mysqli($db_host, $db_user, $db_pw, $db_name);
echo $db->host_info."<br>";

foreach($stmts as $stmt) {
    echo $stmt.";<br>";
    if($db->query($stmt)) {
        echo "ok";
    } else {
        echo '<span style="color:red;">'.$db->error.'</span>';
    }
    echo "<br>";
}

?>

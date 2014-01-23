<?php include 'header.inc.php';
include_once("admin/params.inc.php");
$db = new mysqli($db_host, $db_user, $db_pw, $db_name);
?>

          <h1>Aktuell</h1>

          <?php 
          $results = $db->query('select * from news order by date desc');
          while ($row = $results->fetch_assoc()) {
          ?>  
          <h3><?=$row["title"]?> <small><?=date_format(date_create($row["date"]),"j.n.Y")?></small></h3> 
          <p><?=str_replace("\n","<br>",$row["text"])?></p>
          <?php
          }   
          ?>  

<?php include 'footer.inc.php' ?>

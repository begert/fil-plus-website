<?php include 'header.inc.php' ?>
<?php
include_once("params.inc.php");
$db = new mysqli($db_host, $db_user, $db_pw, $db_name);
?>
<h1>Aktuell</h1>

<button id="new" class="btn btn-lg btn-primary">Eintrag hinzuf&uuml;gen</button>
<br><br>
<div class="list-group">
    <?php 
    $results = $db->query('select * from news order by date desc');
    while ($row = $results->fetch_assoc()) {
    ?>  
    <a href="aktuell_edit.php?edit=<?=$row["id"]?>" class="list-group-item">
        <h3><?=$row["title"]?> <small><?=date_format(date_create($row["date"]),"j.n.Y")?></small></h3> 
        <p><?=str_replace("\n","<br>",$row["text"])?></p>
    </a>
    <?php
    }   
    ?>  
</div>

<script>
    $('button#new').click(function(event) {
        window.location.href = "aktuell_edit.php";
    });
</script>

<?php include 'footer.inc.php' ?>


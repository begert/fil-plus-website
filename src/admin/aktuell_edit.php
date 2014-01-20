<?php
$db = new SQLite3('db.db');

if(isset($_POST["delete"])) {
    $stmt = $db->prepare("delete from news where id=:id");
    $stmt->bindValue("id", $_GET["edit"]);
    $stmt->execute();
    header("Location: aktuell_list.php");
    die();
}

$formaction = $php_self;
if(isset($_GET["edit"])) {
    $edit = $_GET["edit"];
    $stmt = $db->prepare("select title, text from news where id=:id");
    $stmt->bindValue("id", $edit);
    $result = $stmt->execute();
    $row = $result->fetchArray();
    $title = $row["title"];
    $message = $row["text"];
    $formaction .= "?edit=$edit";
}

if(isset($_POST["save"])) {
    $title = $_POST["titleInput"];
    $message = $_POST["messageInput"];
    if(isset($edit)) {
        $stmt = $db->prepare("update news set title=:title, text=:text where id=:id");
        $stmt->bindValue("id", $edit);
    } else {
        $stmt = $db->prepare("insert into news (title, text, date) values(:title, :text, datetime('now','localtime'))");
    }
    $stmt->bindValue("title", $title);
    $stmt->bindValue("text", $message); 
    $stmt->execute();
    if(!isset($edit)) {
        $edit=$db->lastInsertRowID();
        $formaction .= "?edit=$edit";
    }
    header("Location: aktuell_list.php");
    die();
}

include 'header.inc.php'; 
?>
<h1>Aktuell</h1>
<h2>Eintrag <?if(isset($edit)) echo "bearbeiten"; else echo "erfassen"; ?></h2>
<form role="form" action="<?=$formaction?>" method="post">
  <div class="row form-group">
    <div class="col-md-10">
      <input type="text" class="form-control" name="titleInput" id="titleInput" placeholder="Titel" required value="<?=$title?>">
    </div>
  </div>
  <div class="row form-group">
    <div class="col-md-10">
      <textarea class="form-control" name="messageInput" id="messageInput" rows="12" placeholder="Text" required><?=$message?></textarea>
    </div>
  </div>
  <button type="submit" name="save" id="save" class="btn btn-lg btn-primary">Speichern</button>
  <button type="submit" name="delete" id="delete" class="btn btn-lg btn-danger">L&ouml;schen</button>
  <button type="button" name="back" id="back" class="btn btn-lg">Zur&uuml;ck</button>
</form>

<script>
    $('button#back').click(function(event) {
        window.location.href = "aktuell_list.php";
    });
</script>

<?php include 'footer.inc.php' ?>

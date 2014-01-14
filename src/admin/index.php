<?php include 'header.inc.php' ?>

<h1>Aktuell - Eintrag erfassen</h1>
<form role="form" action="<?php echo $php_self; ?>" method="post">
  <div class="row form-group">
    <div class="col-md-10">
      <input type="text" class="form-control" name="titleInput" id="titleInput" placeholder="Titel" required value="<?php echo $title; ?>">
    </div>
  </div>
  <div class="row form-group">
    <div class="col-md-10">
      <textarea class="form-control" name="messageInput" id="messageInput" rows="12" placeholder="Text" required><?php echo $message; ?></textarea>
    </div>
  </div>
  <button type="submit" class="btn btn-lg btn-primary">Eintrag erstellen</button>
</form>
<?php include 'footer.inc.php' ?>


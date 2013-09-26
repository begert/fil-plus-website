<?php include 'header.inc.php' ?>

<?php
$mail_sent=0;
$name='';
$email='';
$tel='';
$message='';
$error = "";

// on submit
if( isset($_POST['nameInput']) || isset($_POST['emailInput']) || isset($_POST['messageInput']) || isset($_POST['captchaInput']) ){
    $name = $_POST['nameInput'];
    $email = $_POST['emailInput'];
    $tel = $_POST['telInput'];
    $message = $_POST['messageInput'];
    $captcha = $_POST['captchaInput'];
     
    // name
    if( $name == "" ){ $error .= 'name missing!<br>'; }
    // message
    if( $message == "" ){ $error .= 'message missing!<br>'; }
    // captcha
    if( $captcha == "" || $captcha != $_SESSION['captcha']){ $error .= "Schlecht im Kopfrechnen? Versuchen Sie's nochmal!<br>"; }
 
    // no error, send email
    if( $error == ""){              
                         
        // your email address
        $address = "web@fil-plus.ch";
         
        // email subject
        $subject = "Anfrage von ".$name;
        // email content
        $content = '<strong>Name:</strong> '.$name.'<br>
                    <strong>E-mail:</strong> '.$email.'<br>
                    <strong>Telefon:</strong> '.$tel.'<br>
                    <strong>Anfrage:</strong><br><pre>'.$message.'</pre><br>';
        // html email
        $email_content = '<!doctype html><head><meta charset="utf-8"><title>'.$subject.'</title>';
        $email_content .= '</head><body>';
        $email_content .= $content;
        $email_content .= '</body></html>';                    
                 
        // headers for html email
        $headers  = "MIME-Version: 1.0\n";
        $headers .= "Content-type: text/html; charset=utf-8\n";
        $headers .= "From: Kontaktformular <web@fil-plus.ch>\n";
        // send email
        mail($address, $subject, $email_content, $headers);        
         
        // reset variables
        $name = ""; $email = ""; $message = "";
        $mail_sent = 1;                                                            
    }
}
 
// captcha
$num = rand(1, 20);
$num2 = rand(1, 9);    
$verif = "Sicherheitsfrage: Wieviel ergibt $num und $num2?";
$_SESSION['captcha'] = $num + $num2;     
 
if( $mail_sent == 1 ) {
    echo "<h1>Vielen Dank</h1><p>Ihre Anfrage wurde versandt, wir werden uns sobald wie m&ouml;glich bei Ihnen melden!</p>";
} else {
?>
    <h1>Kontakt</h1>
    <?php if($error != "") echo '<div class="alert alert-danger">'.$error.'</div>' ?>
    <form role="form" action="<?php echo $php_self; ?>" method="post">
      <div class="row form-group">
        <label for="nameInput" class="sr-only">Name</label>
        <div class="col-md-5">
          <input type="text" class="form-control" name="nameInput" id="nameInput" class="form-control" value="<?php echo $name; ?>" placeholder="Ihr Name" required>
        </div>
      </div>
      <div class="row form-group">
        <label for="emailInput" class="sr-only">Email</label>
        <div class="col-md-5">
          <input type="email" class="form-control" name="emailInput" id="emailInput" value="<?php echo $email; ?>" placeholder="Ihre Email-Adresse">
        </div>
      </div>
      <div class="row form-group">
        <label for="telInput" class="sr-only">Telefon</label>
        <div class="col-md-4">
          <input type="text" class="form-control" name="telInput" id="telInput" value="<?php echo $tel; ?>" placeholder="Ihre Telefonnummer">
        </div>
      </div>
      <div class="row form-group">
        <label for="messageInput" class="sr-only">Anfrage</label>
        <div class="col-md-10">
          <textarea class="form-control" name="messageInput" id="messageInput" rows="12" placeholder="Ihre Anfrage" required><?php echo $message; ?></textarea>
        </div>
      </div>
      <div class="row form-group">
        <label for="captchaInput" class="sr-only">Sicherheitsfrage: <?php echo $verif; ?></label>
        <div class="col-md-6">
          <input type="text" class="form-control" name="captchaInput" id="captchaInput" value="" placeholder="<?php echo $verif; ?>" required>
        </div>
      </div>
      <button type="submit" class="btn btn-lg btn-primary">Anfrage senden</button>
    </form>
<?php
}
?>

<?php include 'footer.inc.php' ?>

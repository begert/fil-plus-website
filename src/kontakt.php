<?php include 'header.inc.php' ?>

<?php
// on submit
if( isset($_POST[name]) || isset($_POST[email]) || isset($_POST[message]) || isset($_POST[captcha]) ){
    $name = $_POST[name];
    $email = $_POST[email];
    $tel = $_POST[tel];
    $message = $_POST[message];
    $captcha = $_POST[captcha];
     
    $error = "";
    // name
    if( $name == "" ){ $error .= 'name missing!<br>'; }
    // message
    if( $message == "" ){ $error .= 'message missing!<br>'; }
    // captcha
    if( $captcha == "" || $captcha != $_SESSION[captcha]){ $error .= "Schlecht im Kopfrechnen? Versuchen Sie's nochmal!<br>"; }
 
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
$_SESSION[captcha] = $num + $num2;     
 
if( $mail_sent == 1 ) {
    echo "<h1>Vielen Dank</h1><p>Ihre Anfrage wurde versandt, wir werden uns sobald wie m&ouml;glich bei Ihnen melden!</p>";
} else {
    echo '
    <h1>Kontakt</h1>
    <p><br></p>
    <form action="'.$php_self.'" method="post">
	    <p><input type="text" class="span3" name="name" value="'.$name.'" placeholder="Ihr Name" required></p>
	    <p><input type="email" class="span3" name="email" value="'.$email.'" placeholder="Ihre Email-Adresse"></p>
	    <p><input type="text" class="span2" name="tel" value="'.$tel.'" placeholder="Ihre Telefonnummer"></p>
	    <p><textarea class="span8" name="message" rows="12" placeholder="Ihre Anfrage" required>'.$message.'</textarea><p>
	    <p>
	    	<label class="text-error">'.$error.'</label>
	    	<input type="text" class="span4" name="captcha" value="" placeholder="'.$verif.'" required>
	    </p>
	    <p><button type="submit" class="btn btn-large btn-primary">Anfrage senden</button></p>
    </form>';
}
?>

<?php include 'footer.inc.php' ?>
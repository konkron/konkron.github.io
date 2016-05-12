$email=$_POST['email'];
$message=json_encode($_POST);
$receiver="kontakt@konkron.com";
$mailer=$_POST['name'];

mail($email,"",$message,  array("from"=>$mailer));

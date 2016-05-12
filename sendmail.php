$email=$_POST['email'];
$message=$_POST['title'];
$message=$_POST['message'];
$receiver="kontakt@konkron.com";
$mailer=$_POST['name'];

mail($email,$title,$message,  array("from"=>$mailer));

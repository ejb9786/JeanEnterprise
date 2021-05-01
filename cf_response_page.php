<html>
<body>
<!-- This PHP code will loop through all of the input fields and output the IDs and names. Both options of the get and post methods are checked. -->
<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $comment = $_POST['comment'];
  $gender = $_POST['gender'];
  
$mailTo = "ejb9786@yahoo.com";
$headers = "From: .$email;
$txt = "You have reveived an email from".$name.".\n\n".$message;

mail($mailTo, $email, $txt, $headers);
header("Location: index.php?mailsend");
}

?>
</body>
</html> 
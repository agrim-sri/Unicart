<?php
require_once('config.php');

$Name    = $_POST['name'];
$Email   = ($_POST['email']);
$Phone   = ($_POST['phone']);
$Subject = ($_POST['subject']);
$message = ($_POST['message']);

//check whether submit button is pressed or not
if(isset($_POST['submit']))
{
    $sql = "INSERT INTO contact (name, email, phone, subject, message) VALUES(?,?,?,?,?)";
    $stmtinsert = $db->prepare($sql);
    $result = $stmtinsert->execute([$Name, $Email, $Phone, $Subject, $message]);
    echo "Wow! User Registration Completed.";
    header("Location:index.html");
}else{
    echo 'No data';
}
?>

<!-- Execute the query and returning a message
$sql = "INSERT INTO contact (name, email, phone, subject, message) VALUES (?,?,?,?,?)";
$stmtinsert = $db->prepare($sql);
$result = $stmtinsert->execute([$Name, $Email, $Phone, $Subject, $message]);
if(!$result){
    die('Error occured [' . $db->error . ']');
}
else{
    echo "Thank you! We will get in touch with you soon";
}  
return header("Location:index.html");
}
?> -->

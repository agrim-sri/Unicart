<?php
require_once('config.php');
?>
<?php
if(isset($_POST)){
    $email 			= $_POST['email'];
	$password 		= ($_POST['password']);
    $confirm_password =  ($_POST['confirm_password']);
    if($password!=$confirm_password){
        echo "<script>alert('Your passwords did not match!')</strict>";
        return header("Location:index.html");
    }else{
        $sql = "INSERT INTO login (email, password ) VALUES(?,?)";
        $stmtinsert = $db->prepare($sql);
        $result = $stmtinsert->execute([$email, $password]);
        echo "Wow! User Registration Completed.";
	}
    header("Location:index.html");
}else{
	echo 'No data';
}
?>

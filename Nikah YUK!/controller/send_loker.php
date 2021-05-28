<?php  
if (isset($_POST['name1']) && isset($_POST['name2']) && isset($_POST['address']) && isset($_POST['email']) && isset($_POST['number']) && isset($_POST['major']) ) {	
	include 'db_conn.php';

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$name1 = validate($_POST['name1']);
    $name2 = validate($_POST['name2']);
	$address = validate($_POST['address']);
	$email = validate($_POST['email']);
	$number = validate($_POST['number']);
	$major = validate($_POST['major']);
	
	

	if (empty($name1) || empty($name2) || empty($address) || empty($email)|| empty($number)|| empty ($major)) {
		header("Location: loker.php");
	}else {

		$sql = "INSERT INTO loker(name1, name2, address, email, number, major) VALUES('$name1', '$name2', '$address', '$email', '$number', '$major')";
		$result = mysqli_query($conn, $sql);
		
		if ($result) {

			// kalo mau liat isi waktu send yg bawah ini apus aja
			header("Location: loker.php");	
			
		}else {
			echo "Your message could not be sent!";
		}
	}
}




<?php  


if (isset($_POST['name']) && isset($_POST['message']) && isset($_POST['email']) && isset($_POST['nilai'])) {
	include 'db_conn.php';

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$name = validate($_POST['name']);
	$message = validate($_POST['message']);
	$email = validate($_POST['email']);
	$nilai = validate($_POST['nilai']);
	

	if (empty($message) || empty($name) || empty($email) || empty($nilai) ) {
		header("Location: ../view/testimoni.php");
	}else {

		$sql = "INSERT INTO testimoni(name, message, email, nilai) VALUES('$name', '$message', '$email', '$nilai')";
		$result = mysqli_query($conn, $sql);
		
		if ($result) {
		   echo  "Nama pasangan :".$name. "<br>";
			echo "email:". $email."<br>";
			echo "message:" .$message."<br>";
			echo "nilai :" . $nilai. "<br>";

			// kalo mau liat isi waktu send yg bawah ini apus aja
			header("Location: ../view/testimoni.php");	
			
		}else {
			echo "Your message could not be sent!";
		}
	}
}


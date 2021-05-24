<?php
    //session start
    if (!isset($_SESSION)) {
        session_start();
    }

    //connection to database
    $conn = mysqli_connect("localhost","root","","nikah-yuk");
    
    function query($query){

        global $conn;
        $result = mysqli_query($conn,$query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows [] = $row;
        }
        return $rows;
    }

    //function untuk proses registrasi
    function regis($data){
    
        global $conn;
        // nampung ke database
        $nama = $data["nama"];
        $email = $data["email"];
        $phone_number = $data["phone_number"];
        $password = mysqli_real_escape_string($conn, $data["password"]);
        

        // nampung session data
        $_SESSION["nama"] = "$nama";        
        $_SESSION["email"] = "$email";
        $_SESSION["phone_number"] = "$phone_number";
        $_SESSION["password"] = "$password";

        mysqli_query($conn, "INSERT INTO users VALUES('','$nama','$email','$phone_number','$password')");


        return mysqli_affected_rows($conn);
    }

    //function untuk proses login
    function login($data)
    {
    global $conn;

    $email = $data['email'];
    $password = $data['password'];


    // cek email
    $emailCek = "SELECT * FROM users WHERE email = '$email'";
    $select = mysqli_query($conn, $emailCek);
  

    if (mysqli_num_rows($select) == 1) {
        $result = mysqli_fetch_assoc($select);

        // cek password
        if ($password == ($result['password'])) {
            $_SESSION['id'] = $result['id'];
            $_SESSION['nama'] = $result['nama'];
            $_SESSION['email'] = $result['email'];
            $_SESSION['phone_number'] = $result['phone_number'];
           
            
            if($password == "admin"){
                header("Location: admin.php");
                exit;
            }

            // set cookie
            if (is_null($data['remember'])) {
                setcookie('email', '', time() - 1);
                setcookie('password', '', time() - 1);
                setcookie('remember', '', time() - 1);
            } else {
                setcookie("email", $email);
                setcookie("password", $password);
                setcookie("remember", "checked");
            }

            $_SESSION['message'] = 'Berhasil Login';
            header("Location: user/Welcome_page.php");
        }
    }
}

?>
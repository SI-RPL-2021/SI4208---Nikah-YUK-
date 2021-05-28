<?php
    // session_start();
    if (!isset($_SESSION)) {
        session_start();
    }

    //connection to database
    $conn = mysqli_connect("localhost","root","","nikah-yuk");
    

    function query($query){

        global $conn;
        $result = mysqli_query($conn,$query);
        $rows = [];
        while($row =  mysqli_fetch_array($result)){
            $rows [] = $row;
        }
        return $rows;
    }

    //function untuk proses registrasi
    // function regis($data){
    
    //     global $conn;
        // nampung ke database
        // $nama = $data["nama"];
        // $email = $data["email"];
        // $phone_number = $data["phone_number"];
        // $password = mysqli_real_escape_string($conn, $data["password"]);
        

        // nampung session data
        // $_SESSION["nama"] = "$nama";        
        // $_SESSION["email"] = "$email";
        // $_SESSION["phone_number"] = "$phone_number";
        // $_SESSION["password"] = "$password";

        // mysqli_query($conn, "INSERT INTO users VALUES('','$nama','$email','$phone_number','$password')");


    //     return mysqli_affected_rows($conn);
    // }

    //function untuk proses login
    // function login($data)
    // {
    // global $conn;

    // $email = $data['email'];
    // $password = $data['password'];


    // cek email
    // $emailCek = "SELECT * FROM users WHERE email = '$email'";
    // $select = mysqli_query($conn, $emailCek);
  

    // if (mysqli_num_rows($select) == 1) {
    //     $result = mysqli_fetch_assoc($select);

    //     // cek password
//         if ($password == ($result['password'])) {
//             $_SESSION['id'] = $result['id'];
//             $_SESSION['nama'] = $result['nama'];
//             $_SESSION['email'] = $result['email'];
//             $_SESSION['phone_number'] = $result['phone_number'];
           
            
//             if($password == "admin"){
//                 header("Location: admin.php");
//                 exit;
//             }

//             // set cookie
//             if (is_null($data['remember'])) {
//                 setcookie('email', '', time() - 1);
//                 setcookie('password', '', time() - 1);
//                 setcookie('remember', '', time() - 1);
//             } else {
//                 setcookie("email", $email);
//                 setcookie("password", $password);
//                 setcookie("remember", "checked");
//             }

//             $_SESSION['message'] = 'Berhasil Login';
            
//             header("Location: user/Welcome_page.php");
//         }
//     }
// }

function update ($data) {
    global $conn;

    
    $userid = $data['userid'];
    $namalengkap = $data['namalengkap'];
    $email = $data['email'];
    $notelp = $data['notelp'];
    

    $query = "UPDATE login SET 
        email ='$email', 
        notelp ='$notelp', 
        namalengkap='$namalengkap' 
        
        WHERE  userid = '$userid'
        ";

    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);

}

if (!empty($_GET['namaBrg'])) {
    $user_id = $_SESSION['userid'];
    $price = $_GET['price'];
    $namaBrg = $_GET['namaBrg'];

    $insert = "INSERT INTO cart_package VALUES ('','$user_id','$namaBrg','$price')";
    mysqli_query($conn, $insert);

 
    
                 echo "<script> 
                 alert('Data berhasil di tambahkan!');
                 document.location.href ='../view/user/Welcome_page.php';
                  </script>";      


    return mysqli_affected_rows($conn);
}

// if (!empty($_GET['userid'])) {
//     $userid = $_GET['userid'];

//     $delete = "DELETE FROM cart_package WHERE userid='$userid'";
//     mysqli_query($conn, $delete);

//     echo "<script> 
//                  alert('Data berhasil di hapus!');
//                  document.location.href ='../view/user/cart_user.php';
//                   </script>"; 

    

//     return mysqli_affected_rows($conn);
// }

function show()
{
    global $conn;

    $user_id = $_SESSION['userid'];

    $select = "SELECT * FROM cart_package WHERE user_id='$user_id'";
    $result = mysqli_query($conn, $select);
    $carts = null;

    while ($cart = mysqli_fetch_assoc($result)) {
        $carts[] = $cart;
    }

    $totalHarga = 0;

    if (!is_null($carts)) {
        foreach ($carts as $harga) {
            $totalHarga += $harga['price'];
        }

        return array($carts, $totalHarga);
    }
}

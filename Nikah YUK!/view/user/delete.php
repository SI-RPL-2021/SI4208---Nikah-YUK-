<?php
// require 'config.php';
$conn = mysqli_connect("localhost","root","", "nikah-yuk");

$id = $_GET["id"];

function delete ($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM cart_package WHERE id=$id");
    return mysqli_affected_rows($conn);

}

if(delete($id) > 0){
    echo "
    <script>
            alert('Data berhasil dihapus!');
            document.location.href = 'cart_user.php';
    
    </script>  
    ";

} else {
    // echo("Error description: " . $conn -> error);
    echo "
    <script>
            alert('Data gagal dihapus!');
            document.location.href = 'cart_user.php';
    
    </script>  
    ";

}


?>
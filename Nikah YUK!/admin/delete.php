<?php
$id = $_GET["userid"];
$conn = mysqli_connect("localhost","root","", "nikah-yuk");



function delete ($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM login WHERE userid=$id");
    return mysqli_affected_rows($conn);

}

if(delete($id) > 0){
    echo "
    <script>
            alert('Data berhasil dihapus!');
            document.location.href = 'customer.php';
    
    </script>  
    ";

} else {
    // echo("Error description: " . $conn -> error);
    echo "
    <script>
            alert('Data gagal dihapus!');
            document.location.href = 'customer.php';
    
    </script>  
    ";

}


?>
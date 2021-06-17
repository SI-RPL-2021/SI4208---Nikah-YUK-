<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <title>Document</title>

</head>
<body>
<style>
    .inner{
    max-width: 1200px;
    margin: auto;
    overflow: hidden;
    padding: 0 20px;
  }
  .border{
    width: 160px;
    height: 5px;
    background: #6ab04c;
    margin: 26px auto;
  }
</style>
<div class="inner">
    <center><h1>PHOTOGRAPHER</h1></center>
    <div class="border">
</div>
<div class="row">
    <div class="container">
    <h2><p><font size=”90″ color= "green">Description :</font></p></h2>
    <h5>Photographers tend to specialise in one particular area of photography such as press and photo journalism, fashion or scientific and medical photography.</h5>
    
    
    <h2><p><font size=”90″ color= "green">Qualifications :</font></p></h2>
    <h5>- Ability to work flexible hours to accommodate client schedules.</h5>
    <h5>- Knowledge of photography techniques.</h5>
    <h5>- Communication skills.</h5>
    <h5>- Proficiency with photo editing. software and camera equipment.</h5>  
</div>
<!-- Button trigger modal -->

<div class ="container mt-5">
                    <!-- Button trigger modal -->
                    <h3> Tekan tombol dibawah ini  </h3>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal"> Join with us !!! </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                     <div class="modal-content">
                     <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">You're applying for : Photographer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                    <div class="modal-body">
         
      
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
           
          </div>
          <div class="panel-body">
         

<body>
    
            <form action ="" method="POST" enctype="multipart/form-data">
                <b> File Upload</b> <input type ="file" name="NamaFile">
                <input type ="submit" name="proses" value="Upload">
            </form>

            <?php
            $koneksi =mysqli_connect("localhost","root", "", "nikah-yuk");
            if (isset($_POST['proses'])){
                $direktori = "berkas1/";
                $file_name=$_FILES['NamaFile']['name'];
                move_uploaded_file($_FILES['NamaFile']['tmp_name'],$direktori.$file_name);
                
            mysqli_query($koneksi,"insert into dokumen set file ='$file_name'");
            header("Location: loker_user.php");	
            
            }

            ?>
                
        
    </form>

        
    </div>
    
  </div>
</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
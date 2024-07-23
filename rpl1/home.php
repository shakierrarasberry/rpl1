<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        body{
            background-color : #BEC6A0;
        }
        *{
            margin : 0;
            padding : 0;
        }
        img{
            width : 100%;
            height : 400px;
            object-fit: cover;
            
        }
        .btn-outline-light{
           margin-top : 20px;
           margin-bottom : 20px;
           padding:10px;
           margin: 10PX;
           
        }
        .table{

            width: 50%;
            margin-left: 40px;
          
        }
    </style>
</head>
<body>
    <div class="con">
        <div class="img">
            <img src="https://m.media-amazon.com/images/S/pv-target-images/4e9a326fd709a262f7acdea3e47ba654e2d5f4e2eb3c0b19a85bc4da075f246b._SX1080_FMjpg_.jpg" alt="logo atas" id = "judul">
           
        </div>
        <div class="isi">
        <h2 style = "margin-top : 10px; margin-left: 10px;">data anak 12 rpl 1</h2>  
        <button type="button" class="btn btn-outline-light btn-sm">
    <a style = "text-decoration : none; color:#40534C"  id= "a" href="tambah.php"> <h2>tambah data</h2></a>
        </button>
  
   
  
        

  <div
    class="table-responsive" 
  >
    <table
        class="table " style = "background-color:#40534C;" 
    >
    
            <tr >
               
                <th scope="col">no</th>
                <th scope="col">nama </th>
                <th scope="col">jurusan</th>
                
            </tr>
           
    
  </div>
        </div>
    </div>
    <?php 
          include 'ponyokoneksi.php';
              $data = mysqli_query($koneksiponyo,"select * from siswa");
              while ($d = mysqli_fetch_array($data)){
                ?>
                <tr >
                 
                    <td><?php echo $d['no']; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['jurusan']; ?></td>
                  
              </tr>
         <?php
              }
            ?>  
    
</body>
</html>
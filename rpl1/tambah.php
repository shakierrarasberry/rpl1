<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .card{
        width:300px;
        height: 400px;
        background-color: #FEF3E2;
        border-radius : 20px;
        padding : 30px;
        text-align: center;
        margin : auto;
        margin-top : 60px;
        color : 
    }
    body{
        background-image: url('ss2.png');
    background-repeat: no-repeat;
    background-size: cover; /* Atur ukuran gambar untuk mencakup seluruh area elemen */
    background-position: center; /* Posisikan gambar latar belakang di tengah-tengah elemen */
    height: 100vh; /* Atur tinggi elemen body agar sesuai dengan tinggi layar */
    margin: 0; /* Hapus margin bawaan dari body */
    padding: 0; /* Hapus padding bawaan dari body */
    }
</style>
<body >

    <div class="card">
    <h1 ><a style="text-decoration:none;" href="home.php">lihat semua data</a></h1>
    
    <h3>insert data kelas</h3>
    
    <form action="insertponyo.php" method="POST" >
    <table>
        <tr>
            <td>nomor absen</td>
            <td><input type="text" name="no"></td>
        </tr>
        <tr>
            <td>Nama </td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td><input type="text" name="jurusan"></td>
        </tr>
        <tr>
           
            <td></td>
            <td><input type="submit" value="simpan"></td>
        </tr>
    </table>
    </div>
    
    </form>
</body>
</html>
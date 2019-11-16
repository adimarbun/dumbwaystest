<?php include '../module.php' ;

$judul=$_POST['judul'];
$stok=$_POST['stok'];
$kategori=$_POST['category'];
$image=$_FILES['photo'];
$deskripsi=$_POST['deskripsi'];



// ambil data file
$namaFile = $image['name'];
$namaSementara = $image['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "../upload/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

if($terupload==false){die('gagal');}
$gambar="upload/".$namaFile;


$stmt = $conn->prepare("INSERT INTO books (name,stok,image,category_id,deskripsi) VALUES ('$judul','$stok','$gambar','$kategori','$deskripsi')");
$success = $stmt->execute();

if ($success == true){
    echo "
    <script type='text/javascript'>
    
        location.assign('../index.php');
    </script>
    ";}
?>
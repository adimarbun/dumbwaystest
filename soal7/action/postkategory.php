<?php include '../module.php' ;

$nama=$_POST['kategory'];

$stmt = $conn->prepare("INSERT INTO categories(name) VALUES ('$nama')");

$success = $stmt->execute();

if ($success == true){
    echo "
    <script type='text/javascript'>
    
        location.assign('../index.php');
    </script>
    ";}

?>
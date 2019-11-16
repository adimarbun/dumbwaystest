<?php include 'module.php' ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Dumbways</title>
  </head>
  <body>

<div class="container-fluid mt-4">
<a class="btn btn-primary" href="action/create.php" >Create</a>

  <div class="row">
      <?php $categories=$conn->query("select * from categories");
      foreach($categories as $category){
      ?>
          <div class="col-md-12   mt-4">
                <a class="text-info">Nama Kategory :<?php echo $category['name'] ?></a>
                <div class="row">
                  
                <?php $result=$conn->query("select books.id as id,books.name as name ,books.stok as stok,books.image as image,books.deskripsi as deskripsi, categories.name as kategori from books
                                            inner join categories on books.category_id=categories.id where books.category_id =".$category['id']);     ?>
                <?php   foreach($result as $item){
                    ?>
                    <div class="single-blog ">
                        <img src="<?php echo $item['image'];?>">
                        <div class="mt-4 font-weight-bold">
                            <a class="text-warning" href="#"><?php echo $item['name'];?></a>
                            <a class="float-right"  href="#">Stok: <?php echo $item['stok'];?></a>
                        </div>
                        <div class="mt-4">
                        <?php if($item['stok']=="0") {?>
                          <label>Stock Habis</label><?php }  else{ ?>
                          <a href="#" class="read-more-btn ">Pinjam</a>
                        <?php }?> 
                            <a href="#" class="read-more-btn-1 ml-auto float-right">Kembalikan</a>
                        </div>                  
                    </div>
                    <?php
                    }
                   ?>
                </div>
               
            </div>
            <?php
                  }
                ?>
        </div>
        
    </div>  

   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
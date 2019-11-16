<?php include '../module.php' ?>
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
<div class="container-fluid">
<a class="btn btn-primary" href="createcategories.php" >Create Categories</a>
    <div class="row">
    
        <div class="col-md-6">
            <form method="post" action="postbuku.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input id="judul" class="form-control" type="text" name="judul">
                </div>
                <div class="form-group">
                    <label for="stock">Stock</label>
                    <input id="stock" class="form-control" type="number" name="stok">
                </div>
                <div class="form-group">
                    
                    <label for="category">Category</label>
                    <select id="category" class="form-control" name="category">
                    <?php
                      $result=$conn->query("select * from categories");
                      foreach($result as $item){
                      ?>
                    <option value="<?php echo $item['id']; ?>"><?php echo $item['name']; ?></option>
                    <?php } ?>
                    </select>
                </div>   
                <div class="form-group">
                    <label for="photo">Photo</label>
                    <input id="photo" class="form-control" type="file" name="photo">
                </div>
                <div class="form-group">
                 <label for="my-textarea">Deskripsi</label>
                    <textarea id="my-textarea" class="form-control" name="deskripsi" rows="3"></textarea>
                </div> 
                <button class="tn btn-success" type="submit"> Simpan</button>
            </form>
        </div>
    </div>
</div>  

   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
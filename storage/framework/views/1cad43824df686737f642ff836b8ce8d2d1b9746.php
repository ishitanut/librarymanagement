<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <form action="<?php echo e(url('/')); ?>/bookentry" method ="post">
  <?php echo csrf_field(); ?>

        <div class="container">
        <h1 class="text-center">Add Book</h1>
        <div class="form-group">
            <label for="">Book Name</label>
            <input type="text" name="name" id ="" class="form-control" placeholder="Book Name" aria-describedby="helpId" value="<?php echo e(old('name')); ?>">
            <span class="text-danger">
            <?php 
            foreach ($errors->get('Bookname') as $message) {
             echo $message;
            }
             ?>
            </span>
            <!-- <small id="helpId" class="text-muted">Help text</small> -->
        </div>
        <div class="form-group">
            <label for="">Category</label>
            
                            
            <input type="text" name="category" id ="" class="form-control" placeholder="Select Category" aria-describedby="helpId" value="<?php echo e(old('category')); ?>"> 
            <span class="text-danger">
            <?php 

          foreach ($errors->get('category') as $message) {

            echo $message;

           }

            ?>
            </span>
            <!-- <small id="helpId" class="text-muted">Help text</small> -->
        </div>
        <div class="form-group">
            <label for="">Author</label>
            <input type="text" name="author" id ="" class="form-control" placeholder="Author" aria-describedby="helpId" value="<?php echo e(old('author')); ?>">
            <span class="text-danger">
            <?php 

          foreach ($errors->get('author') as $message) {

            echo $message;

           }

            ?>
            </span>
            <!-- <small id="helpId" class="text-muted">Help text</small> -->
        </div>
        <div class="form-group">
            <label for="">Publisher</label>
            <input type="text" name="publisher" id ="" class="form-control" placeholder="Select Publisher" aria-describedby="helpId" value="<?php echo e(old('publisher')); ?>">
            <span class="text-danger">
            <?php 

          foreach ($errors->get('publisher') as $message) {

            echo $message;

           }

            ?>
            </span>
            <!-- <small id="helpId" class="text-muted">Help text</small> -->
        </div>
        
      
       
        <button class="btn-btn-primary">
            submit
        </button>
    </div>
</form>
  </body>
</html>
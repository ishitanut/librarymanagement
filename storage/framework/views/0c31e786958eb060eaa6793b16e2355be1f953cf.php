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
  <form class ="row g-3" action="<?php echo e(url('/')); ?>/cat" method="POST">
        <?php echo e(csrf_field()); ?>

      <div class="container">
          <a href="/cat/create">Add</a>
          <table class="table">
              
              <thead>
                  <tr>
                      <th>S.no</th>
                      <th>Category</th>
                      <th>Delete</th>
                      <th>Edit</th>

                  </tr>
              </thead>
              <tbody>
                  <?php $__currentLoopData = $categorys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                      
                      <td><?php echo e($category->id); ?></td>
                      <td><?php echo e($category->name); ?></td>
                
                      <td>
                    <a href="/cat/delete/<?php echo e($category->id); ?>"><button type="button" class="btn btn-primary">Delete</button></td></a>
                   <td> <a href="/cat/edit/<?php echo e($category->id); ?>"><button type="button" class="btn btn-primary">Edit</button></td></a>
                      </td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
          </table>
      </div>
                       </form>
                       <div class="row"><?php echo e($categorys->links()); ?></div>;
      <div class="row"><?php echo e($categorys->currentPage()); ?></div>

  </body>
</html>
<!DOCTYPE html>
<html lang="en">

  <head>

    <?php echo $__env->make('home.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <style type="text/css">
    .table_deg
    {
        border: 1px solid white;
        margin: auto;
        text-align: center;
        margin-top: 100px;
    }

    th
    {
        color: white;
        background-color: skyblue;
        font-weight: bold;
        font-size: 18px;  /* fix font size typo */
        padding: 10px;
    }

    td
    {
        color: white;
        background-color: black;
        border: 1px solid white;
        font-weight: bold;
        font-size: 18px;  /* fix font size typo */
    }

    .book_img
    {
        height: 120px;
        width: 80px;
        margin: auto;
    }

</style>

    </style>
  </head>

<body>

  <?php echo $__env->make('home.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> <!-- Place header here -->

  <div class="currently-market">
      <div class="container">
          <div class="row">
              <table class="table_deg">
                  <tr>
                      <th>Book Name</th>
                      <th>ISBN</th>
                      <th>Author</th>
                      <th>Book Status</th>
                      <th>Book Image</th>
                  </tr>
                      <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                          <td><?php echo e($data->book->title); ?></td>
                          <td><?php echo e($data->book->author); ?></td>
                          <td><?php echo e($data->book->ISBN); ?></td>
                          <td><?php echo e($data->status); ?></td>
                          <td>
                            <img class="book_img" src="book/<?php echo e($data->book->book_img); ?>">
                          </td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </table>
          </div>
      </div>
  </div>

  <?php echo $__env->make('home.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html><?php /**PATH /Users/madeprabawa/Desktop/Library_Project/resources/views/home/book_history.blade.php ENDPATH**/ ?>
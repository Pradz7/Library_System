<!DOCTYPE html>
<html>
    <base href='/public'>
  <head>
   <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   <style type="text/css">

    .center
    {
        text-align: center;
        margin: auto;
        margin-top: 60px;
        width: 80%;
        border: 1px solid white;
    }

    th{
        background-color: skyblue;
        text-align: center;
        color: white;
        font-size: 15px;
        font-weight: bold;
        padding: 1;
    }


   </style>
</head>
  <body>
    <?php echo $__env->make('admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="d-flex align-items-stretch">
     <!-- Sidebar Navigation-->
     <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- Sidebar Navigation end-->
     <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">

            <table class="center">
                <tr>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Book Title</th>
                    <th>ISBN</th>
                    <th>Quantity</th>
                    <th>Status</th>
                    <th>Change Status</th>
                    <th>Book Image</th>
                </tr>

                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                

                <tr>
                    <td><?php echo e($data->user->name); ?></td>
                    <td><?php echo e($data->user->email); ?></td>
                    <td><?php echo e($data->user->phone); ?></td>
                    <td><?php echo e($data->book->title); ?></td>
                    <td><?php echo e($data->book->ISBN); ?></td>
                    <td><?php echo e($data->book->quantity); ?></td>
                    <td>
                        <?php if($data->status == 'approved'): ?>
                            <span style="color: greenyellow"><?php echo e(ucfirst($data->status)); ?></span>
                        <?php elseif($data->status == 'rejected'): ?>
                            <span style="color: red"><?php echo e(ucfirst($data->status)); ?></span>
                        <?php elseif($data->status == 'returned'): ?>
                            <span style="color: skyblue"><?php echo e(ucfirst($data->status)); ?></span>
                        <?php else: ?>
                            <span style="color: yellow"><?php echo e(ucfirst($data->status)); ?></span>
                        <?php endif; ?>
                    </td>

                    <td>
                        <img style="height:200px; width: 150px;" src="book/<?php echo e($data->book->book_img); ?>">
                    </td>
                    <td>
                        <a class="btn btn-warning" href="<?php echo e(url('approved_book', $data->id)); ?>">Approved</a>
                        <a class="btn btn-danger" href="<?php echo e(url('rejected_book', $data->id)); ?>">Rejected</a>
                        <a class="btn btn-info" href="<?php echo e(url('returned_book', $data->id)); ?>">Returned</a>
                    </td>
                </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>

            </div>
        </div>
    </div>
        <?php echo $__env->make('admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html><?php /**PATH /Users/madeprabawa/Desktop/Library_Project/resources/views/admin/borrow_request.blade.php ENDPATH**/ ?>
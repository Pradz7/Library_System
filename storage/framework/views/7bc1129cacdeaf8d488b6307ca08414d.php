<!DOCTYPE html>
<html>
    <base href='/public'>
  <head>
   <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <style type="text/css">

    .div_center
    {
        text-align: center;
        margin: auto;

    }

    .title_deg
    {
        color: white;
        padding: 35px;
        font-size: 40px;
        font-weight: bold;
    }

    label{
        display: inline-block;
        width: 200px;
    }

    .div_pad
    {
        padding: 15px;
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

          <div class="div_center">
            <h1 class="title_deg">Add Books</h1>

            <form action="<?php echo e(url('store_book')); ?>" method="Post" enctype="multipart/form-data">

            <?php echo csrf_field(); ?>

                <div class="div_pad">
                    <label>Book Title</label>
                    <input type="text" name="book_name">
                </div>

                <div class="div_pad">
                    <label>ISBN</label>
                    <input type="text" name="ISBN">
                </div>

                <div class="div_pad">
                    <label>Author Name</label>
                    <input type="text" name="author_name">
                </div>

                <div class="div_pad">
                    <label>Quantity</label>
                    <input type="number" name="quantity">
                </div>

                 <div class="div_pad">
                    <label>Description</label>
                    <textarea name="description"></textarea>
                </div>

                <div class="div_pad">
                    <label>Category</label>
                    <select name="category" required>
                        <option>Select a Category</option>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                        <option value="<?php echo e($data->id); ?>"><?php echo e($data->cat_title); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    



                </div>

                <div class="div_pad">
                    <label>Book Image</label>
                    <input type="file" name="book_img">
                </div>

                <div class="div_pad">
                    <label>Author Image</label>
                    <input type="file" name="author_img">
                </div>

                <div class="div_pad">
                    
                    <input type="submit" value="Add Book" class="btn btn-info">
                </div>

            </form>
          </div>

          </div>
        </div>
    </div>

        <?php echo $__env->make('admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html><?php /**PATH /Users/madeprabawa/Desktop/Library_Project/resources/views/admin/add_book.blade.php ENDPATH**/ ?>
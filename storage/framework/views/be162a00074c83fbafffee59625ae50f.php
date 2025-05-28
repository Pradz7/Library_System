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

    .title
    {
        color: white;
        padding: 30px;
        font-size: 30px;
        font-weight: bold;
    }

    label
    {
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
                <h1 class="title">Update Book</h1>
                <form action="<?php echo e(url('update_book', $data->id)); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="div_pad">
                        <label>Book title</label>
                        <input type="text" name="title" value="<?php echo e($data->title); ?>">
                    </div>

                    <div class="div_pad">
                        <label>ISBN</label>
                        <input type="text" name="ISBN" value="<?php echo e($data->ISBN); ?>">
                    </div>

                    <div class="div_pad">
                        <label>Author Name</label>
                        <input type="text" name="author" value="<?php echo e($data->author); ?>">
                    </div>
                    
                    <div class="div_pad">
                        <label>Description</label>
                        <textarea name="description"><?php echo e($data->description); ?></textarea>
                    </div>

                    <div class="div_pad">
                        <label>Quantity</label>
                        <input type="number" name="quantity" value="<?php echo e($data->quantity); ?>">
                    </div>

                    <div class="div_pad">
                        <label>Category</label>
                        <select name="category">
                            <option value="<?php echo e($data->category_id); ?>"><?php echo e($data->category->cat_title); ?></option>
                            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                            <option value="{ $category->cat_title }}"><?php echo e($category->cat_title); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <div class="div_pad">
                            <label>Book Cover</label>
                            <img style="width: 120px; margin: auto;" src="/book/<?php echo e($data->book_img); ?>">
                        </div>

                        <div class="div_pad">
                            <label>Change Book Cover</label>
                            <input type="file" name="book_img">
                        </div>

                        <div class="div_pad">
                            <label>Author Image</label>
                            <img style="width: 80px; border-radius: 50%; margin: auto;" src="/author/<?php echo e($data->author_img); ?>">
                        </div>

                        <div class="div_pad">
                            <label>Change Author Image</label>
                            <input type="file" name="author_img">
                        </div>


                        <div class="div_pad">
                            <input class="btn btn-info" type="submit" value="Update Book">
                        </div>
                    </div>

                </form>
            </div>

            </div>
        </div>
    </div>
    
        <?php echo $__env->make('admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html><?php /**PATH /Users/madeprabawa/Desktop/Library_Project/resources/views/admin/edit_book.blade.php ENDPATH**/ ?>
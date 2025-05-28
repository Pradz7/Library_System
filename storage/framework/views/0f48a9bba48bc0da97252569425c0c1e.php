<!DOCTYPE html>
<html>
    <base href='/public'>
  <head>
   <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   <style type="text/css">
    .div_deg 
    {
        text-align: center;
        margin: auto;
    }

    .title_deg 
    {
        color: white;
        padding: 40px;
        font-size: 30px;
        font-weight: bold;
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

            <div class="div_deg">

            <h2 class="title_deg">Update Category</h2>

            <form action="<?php echo e(url('update_category', $data->id)); ?>" method="post">

            <?php echo csrf_field(); ?>

                <label>Category Name</label>

                <input type="text" name="cat_name" value="<?php echo e($data->cat_title); ?>">

                <input type="submit" class="btn btn-info" value="Update">

            </form>

            </div>

            </div>
        </div>
    </div>


        <?php echo $__env->make('admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html><?php /**PATH /Users/madeprabawa/Desktop/Library_Project/resources/views/admin/edit_category.blade.php ENDPATH**/ ?>
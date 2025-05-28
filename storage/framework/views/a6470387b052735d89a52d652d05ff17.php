<!DOCTYPE html>
<html>
<base href="/public">
<head>
    <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.16.1/sweetalert2.min.js" integrity="sha512-LGHBR+kJ5jZSIzhhdfytPoEHzgaYuTRifq9g5l6ja6/k9NAOsAi5dQh4zQF6JIRB8cAYxTRedERUF+97/KuivQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <style type="text/css">
        .div_center {
            text-align: center;
            margin: auto;
        }

        .cat_label {
            font-size: 30px;
            font-weight: bold;
            padding: 30px;
            color: white;
        }

        .center {
            margin: auto;
            width: 50%;
            text-align: center;
            margin-top: 50px;
            border: 1px solid white;
        }

        th {
            background-color: skyblue;
            padding: 10px;
        }

        tr {
            border: 1px solid white;
            padding: 10px;
        }
    </style>
</head>
<body>
    <?php echo $__env->make('admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation -->
        <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Sidebar Navigation end -->

        <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">
                    <div class="div_center">
                        <!-- Flash Message -->
                        <?php if(session()->has('message')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session()->get('message')); ?>

                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                            </div>
                        <?php endif; ?>

                        <!-- Add Category Form -->
                        <h1 class="cat_label">Add Category</h1>
                        <form action="<?php echo e(url('add_category')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <span style="padding-right: 15px;">
                                <label>Category Name</label>
                                <input type="text" name="category" required>
                                <button type="submit" class="btn btn-primary ml-2">Add Category</button>
                            </span>
                        </form>

                        <!-- Category List Table -->
                        <div>
                            <table class="center">
                                <tr>
                                    <th>Category Name</th>
                                    <th>Action</th>
                                </tr>

                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(is_object($item)): ?>
                                        <tr>
                                            <td><?php echo e($item->cat_title); ?></td>
                                            <td>
                                                <a class="btn btn-info" href="<?php echo e(url('edit_category', $item->id)); ?>">Update</a>


                                                <a onclick="confirmation(event)" class="btn btn-danger" href="<?php echo e(url('cat_delete', $item->id)); ?>">Delete</a>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php echo $__env->make('admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Fix for Auth::user()->name if not logged in -->
    <?php $__env->startPush('scripts'); ?>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                <?php if(!Auth::check()): ?>
                    console.warn("User not logged in, Auth::user() is null.");
                <?php endif; ?>
            });
        </script>
    <?php $__env->stopPush(); ?>

    <!-- SweetAlert Delete Confirmation -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function confirmation(ev) {
            ev.preventDefault();
            var urlToRedirect = ev.currentTarget.getAttribute('href');

            Swal.fire({
                title: "Are you sure you want to delete this?",
                text: "You will not be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "Cancel"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = urlToRedirect;
                }
            });
        }
    </script>

</body>
</html>
<?php /**PATH /Users/madeprabawa/Desktop/Library_Project/resources/views/admin/category.blade.php ENDPATH**/ ?>
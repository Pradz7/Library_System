      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"></div>
          <div class="title">
            <h1 class="h5">Admin</h1>
            
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
                <li class="active"><a href="index.html"> <i class="icon-home"></i>Home </a></li>
                <li><a href="<?php echo e(url('category_page')); ?>"> <i class="icon-grid"></i>Category </a></li>
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Books </a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="<?php echo e(url('add_book')); ?>">Add Book</a></li>
                    <li><a href="<?php echo e(url('show_book')); ?>">Show Books</a></li>
                  </ul>
                </li>
                <li><a href="<?php echo e(url('borrow_request')); ?>"> <i class="icon-logout"></i>Borrow Request </a></li>
      </nav><?php /**PATH /Users/madeprabawa/Desktop/Library_Project/resources/views/admin/sidebar.blade.php ENDPATH**/ ?>
<!-- Modern Glassmorphism Header -->
<nav class="navbar navbar-expand-lg navbar-dark py-3 shadow-sm sticky-top" style="background: rgba(15, 23, 42, 0.95); backdrop-filter: blur(10px);">
  <div class="container">
    <!-- Animated Gradient Brand -->
    <a class="navbar-brand fw-bold fs-3 position-relative" href="<?php echo e(url('/')); ?>">
      <span class="gradient-text" style="--gradient-from: #6366f1; --gradient-to: #ec4899;">
        PresUniv Library
        <span class="gradient-border"></span>
      </span>
    </a>

    <!-- Toggler with Animation -->
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navigation Content -->
    <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
      <ul class="navbar-nav ms-auto me-4">
        <li class="nav-item mx-2">
          <a class="nav-link position-relative px-3 <?php echo e(request()->is('/') ? 'active' : ''); ?>" href="<?php echo e(url('/')); ?>">
            Home
            <span class="nav-underline"></span>
          </a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link position-relative px-3 <?php echo e(request()->is('explore') ? 'active' : ''); ?>" href="<?php echo e(url('/explore')); ?>">
            Explore
            <span class="nav-underline"></span>
          </a>
        </li>
      </ul>

      <!-- Auth Buttons -->
      <div class="d-flex gap-3 auth-buttons">
        <?php if(auth()->guard()->guest()): ?>
          <a href="<?php echo e(url('/login')); ?>" class="btn btn-outline-light hover-scale rounded-pill px-4">
            Login
          </a>
          <a href="<?php echo e(url('/register')); ?>" class="btn btn-gradient hover-scale rounded-pill px-4">
            Register
          </a>
        <?php else: ?>
          <form method="POST" action="<?php echo e(route('logout')); ?>">
            <?php echo csrf_field(); ?>
            <button type="submit" class="btn btn-outline-light hover-scale rounded-pill px-4">
              Logout
            </button>
          </form>
        <?php endif; ?>
      </div>
    </div>
  </div>
</nav>

<!-- Styles -->
<style>
.gradient-text {
  background: linear-gradient(45deg, var(--gradient-from), var(--gradient-to));
  -webkit-background-clip: text;
  background-clip: text;
  color: transparent;
  position: relative;
}

.gradient-border::after {
  content: '';
  position: absolute;
  bottom: -5px;
  left: 0;
  width: 100%;
  height: 2px;
  background: linear-gradient(45deg, var(--gradient-from), var(--gradient-to));
  transform: scaleX(0);
  transition: transform 0.3s ease;
}

.navbar-brand:hover .gradient-border::after {
  transform: scaleX(1);
}

.nav-link {
  color: rgba(255, 255, 255, 0.8) !important;
  transition: all 0.3s ease;
}

.nav-link.active {
  color: white !important;
  font-weight: 500;
}

.nav-underline {
  position: absolute;
  bottom: -8px;
  left: 0;
  width: 0;
  height: 2px;
  background: linear-gradient(45deg, #6366f1, #ec4899);
  transition: width 0.3s ease;
}

.nav-link:hover .nav-underline,
.nav-link.active .nav-underline {
  width: 100%;
}

.search-group {
  background: rgba(255, 255, 255, 0.1);
  border-radius: 2rem;
  transition: all 0.3s ease;
}

.search-group:focus-within {
  background: rgba(255, 255, 255, 0.15);
  box-shadow: 0 0 0 2px rgba(99, 102, 241, 0.3);
}

.btn-gradient {
  background: linear-gradient(45deg, #6366f1, #ec4899);
  border: none;
  color: white !important;
  position: relative;
  overflow: hidden;
}

.btn-gradient::after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(255, 255, 255, 0.1);
  opacity: 0;
  transition: opacity 0.3s ease;
}

.btn-gradient:hover::after {
  opacity: 1;
}

.hover-scale {
  transition: transform 0.3s ease;
}

.hover-scale:hover {
  transform: translateY(-2px);
}

@media (max-width: 992px) {
  .navbar-nav {
    margin: 1rem 0;
  }
  
  .search-group {
    margin: 1rem 0;
  }
  
  .auth-buttons {
    margin-top: 1rem;
    justify-content: center;
  }
}
</style>
<?php /**PATH /Users/madeprabawa/Desktop/Library_Project/resources/views/home/header.blade.php ENDPATH**/ ?>
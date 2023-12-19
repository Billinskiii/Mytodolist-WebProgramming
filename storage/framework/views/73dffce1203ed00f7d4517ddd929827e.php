<header>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <h1 class="mytodolist" style="font-size: 40px">MYTODOLIST</h1>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="<?php echo e(url('/dashboard')); ?>">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('/dashboard/tasks')); ?>">Tasks</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('/dashboard/myaccount')); ?>">My Account</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('/dashboard/aboutus')); ?>">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('/login')); ?>">Log Out</a>
            </li>
          </ul>
        </div>
      </nav>
    </header><?php /**PATH /Users/novan/Documents/XAMPP/xamppfiles/htdocs/WebProg/Project/resources/views/header.blade.php ENDPATH**/ ?>
<!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link <?php echo e(Route::is('admin.dashboard') ? '' : 'collapsed'); ?>" href="<?php echo e(route('admin.dashboard')); ?>">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link <?php echo e(Route::is('admin.add_patient') ? '' : 'collapsed'); ?>" href="<?php echo e(route('admin.add_patient')); ?>">
          <i class="bi bi bi-person-plus"></i>
          <span>Add Patient</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link <?php echo e(Route::is('admin.all_patients') ? '' : 'collapsed'); ?>" href="<?php echo e(route('admin.all_patients')); ?>">
          <i class="bx bx-group"></i>
          <span>All Patient</span>
        </a>
      </li>

      

      

      
    </ul>

  </aside>
<?php /**PATH C:\xampp\htdocs\ToothRoot\tooth_root\resources\views/common/sidebar.blade.php ENDPATH**/ ?>
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

      <li class="nav-item">
        <a class="nav-link <?php echo e(Route::is('admin.patient_instructionss') ? '' : 'collapsed'); ?>" href="<?php echo e(route('admin.patient_instructions')); ?>">
          <i class="bi bi-pencil-square"></i>
          <span>Patient Instruction</span>
        </a>
      </li> 

      

      
    </ul>

  </aside>
<?php /**PATH C:\xampp\htdocs\OneScan\one_scan\resources\views/common/sidebar.blade.php ENDPATH**/ ?>
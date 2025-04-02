
<?php $__env->startSection('section'); ?>

    <div class="pagetitle">
      <h1><?php echo e($pageTitle); ?></h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
          <li class="breadcrumb-item active"><?php echo e($pageTitle); ?></li>
        </ol>
      </nav>
    </div>

    <div class="card">
            <div class="card-body" style="padding-top: 20px;">
            <h5 class="card-title">Scan to get Patient Instructions</h5>

            <img src="<?php echo e(asset('assets/img/patient_qr.png')); ?>" alt="" style="width: 500px;">

            </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\One_Scan\OneScan\one_scan\resources\views/admin/instrQR.blade.php ENDPATH**/ ?>
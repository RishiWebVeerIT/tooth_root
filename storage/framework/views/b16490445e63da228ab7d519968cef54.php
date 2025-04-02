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

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <br>
            <div class="card-body">
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Patient Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Check-up Date</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i= 1; ?>
             <?php $__empty_1 = true; $__currentLoopData = $patients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                  <tr>
                    <th scope="row"><?php echo e($i++); ?></th>
                    <td><?php echo e($p->name); ?></td>

                    <td><?php echo e($p->age); ?></td>
                    <td><?php echo e($p->created_at); ?></td>
                    <td><?php echo e($p->email); ?></td>
                    <?php $history = App\Models\history::where('id',$p->id)->first(); ?>
                    <td> <a href="<?php echo e(route('admin.patient_detail_update',$p->id)); ?>" class="btn btn-outline-primary"> <i class="bi bi-pencil-square" style="margin-right: 5px;"></i> Update</a>&nbsp; | &nbsp; <a href="#" class="btn btn-outline-danger"><i class="bi bi-trash-fill" style="margin-right: 5px;"></i>Delete</a>  &nbsp; | &nbsp; <a href="<?php echo e(route('admin.add_history',$p->id)); ?>" class="btn btn-outline-secondary"><i class="bi bi-card-text" style="margin-right: 5px;"></i>Add</a>  &nbsp; | &nbsp; <a <?php if($history): ?> href="<?php echo e(route('admin.patient_history_detail',$p->id)); ?>" <?php endif; ?> class="btn btn-outline-success"><i class="bi bi-eye-fill" style="margin-right: 5px;"></i>View</a></td>
                  </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <?php endif; ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('style'); ?>
    <style>
        .text-white{
            color:aliceblue;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('Layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ToothRoot\tooth_root\resources\views/admin/allPatients.blade.php ENDPATH**/ ?>

<?php $__env->startSection('section'); ?>

    <!-- <div class="pagetitle">
      <h1><?php echo e($pageTitle); ?></h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
          <li class="breadcrumb-item active"><?php echo e($pageTitle); ?></li>
        </ol>
      </nav>
    </div> -->
    <div class="card">
            <div class="card-body">
              <h5 class="card-title"><?php echo e($pageTitle); ?></h5>

              <!-- Vertical Pills Tabs -->
              <div class="d-flex align-items-start">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <button class="nav-link <?php if($tab): ?> <?php if($tab->description == 1): ?> active <?php endif; ?> <?php else: ?> active <?php endif; ?>" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true" onclick="tab(1,<?php echo e($id); ?>);">Images</button>
                  <button class="nav-link <?php if($tab): ?> <?php if($tab->description == 2): ?> active <?php endif; ?> <?php endif; ?>" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false" onclick="tab(2,<?php echo e($id); ?>);">History</button>
                  <button class="nav-link <?php if($tab): ?> <?php if($tab->description == 3): ?> active <?php endif; ?> <?php endif; ?>" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false" onclick="tab(3,<?php echo e($id); ?>);">Clinical Examination</button>
                </div>
                <div class="tab-content" id="v-pills-tabContent">
                  <div class="tab-pane fade <?php if($tab): ?> <?php if($tab->description == 1): ?> show active <?php endif; ?>  <?php else: ?> show active <?php endif; ?>" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" style="background: #f4f6ff; padding: 5px;">
                  <?php echo $__env->make('admin.tabs.addimage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </div>
                  <div class="tab-pane fade <?php if($tab): ?>  <?php if($tab->description == 2): ?> show active <?php endif; ?> <?php endif; ?>" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" style="background: #f4f6ff; padding: 5px; overflow-y: scroll; height: 82vh">
                  <?php echo $__env->make('admin.tabs.addHistoryDetail', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </div>
                  <div class="tab-pane fade <?php if($tab): ?>  <?php if($tab->description == 3): ?> show active <?php endif; ?> <?php endif; ?>" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" style="background: #f4f6ff; padding: 5px; overflow-y: scroll; height: 82vh">
                  <?php echo $__env->make('admin.tabs.clinical_examination', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </div>
                </div>
              </div>
              <!-- End Vertical Pills Tabs -->

            </div>
          </div>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>
<script>
    function tab(tab,id){
        console.log(id);
        $.ajax({
          url: "<?php echo route('admin.tab'); ?>",
          type:"POST",
          data:{
            "_token": "<?php echo e(csrf_token()); ?>",
            tab:tab,
            id:id,
          },
          success:function(response){
            
          },
          error:function(response){
            console.log(response);
           }
         });
        }
</script>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('style'); ?>
<style type="text/css">
	.add-content {
    border-right: 1px solid #012970;
}
.add-content{
	text-align: end;
}
/*.cl-custom-check{
    position: absolute;
    display: inline-block;
    z-index: 99;
}*/
label.cl-custom-check-label{
	position: relative;
}
.divided_section_one {
    border-bottom: 1px solid #012970;
}
.cl-custom-check {
	 display: none;
}
 .cl-custom-check + .cl-custom-check-label {
	/* Unchecked style */
	 background-color: #ccc;
	 color: #fff;
	 padding: 5px 10px;
	 font-family: sans-serif;
	 cursor: pointer;
	 user-select: none;
	 border-radius: 4px;
	 display: inline-block;
	 margin: 0 10px 10px 0;
	 backface-visibility: hidden;
	 transition: all 0.6s ease;
}
 .cl-custom-check:checked {
	/* Checked style */
}
 .cl-custom-check:checked + .cl-custom-check-label {
	 background-color: #012970;
	 backface-visibility: hidden;
	 transform: rotateY(360deg);
}
.second-table{
	margin-top: 10px;
}
.diff-table{
	margin-top: 50px;
}

 
</style>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('Layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\one_scan\resources\views/admin/addHistory.blade.php ENDPATH**/ ?>

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
    <div class="card" style="    background: center;">
            <div class="card-body">
              <h5 class="card-title"><?php echo e($pageTitle); ?></h5>

              <!-- Vertical Pills Tabs -->
              <div class="d-flex align-items-start">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <button class="nav-link <?php if($tab): ?> <?php if($tab->description == 1): ?> active <?php endif; ?> <?php else: ?> active <?php endif; ?>" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true" onclick="tab(1,<?php echo e($id); ?>);">Images</button>
                  <button class="nav-link <?php if($tab): ?> <?php if($tab->description == 2): ?> active <?php endif; ?> <?php endif; ?>" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false" onclick="tab(2,<?php echo e($id); ?>);">History</button>
                  <button class="nav-link <?php if($tab): ?> <?php if($tab->description == 3): ?> active <?php endif; ?> <?php endif; ?>" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false" onclick="tab(3,<?php echo e($id); ?>);">Clinical Examination</button>
                  <button class="nav-link <?php if($tab): ?> <?php if($tab->description == 4): ?> active <?php endif; ?> <?php endif; ?>" id="v-pills-occulsion-tab" data-bs-toggle="pill" data-bs-target="#v-pills-occulsion" type="button" role="tab" aria-controls="v-pills-occulsion" aria-selected="false" onclick="tab(4,<?php echo e($id); ?>);">Model in Occulsion</button>
                  <button class="nav-link <?php if($tab): ?> <?php if($tab->description == 5): ?> active <?php endif; ?> <?php endif; ?>" id="v-pills-Cephalometric-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Cephalometric" type="button" role="tab" aria-controls="v-pills-Cephalometric" aria-selected="false" onclick="tab(5,<?php echo e($id); ?>);">Cephalometric Analysis</button>
                  <button class="nav-link <?php if($tab): ?> <?php if($tab->description == 6): ?> active <?php endif; ?> <?php endif; ?>" id="v-pills-steiner-tab" data-bs-toggle="pill" data-bs-target="#v-pills-steiner" type="button" role="tab" aria-controls="v-pills-steiner" aria-selected="false" onclick="tab(6,<?php echo e($id); ?>);">Steiner's Analysis</button>
                  <button class="nav-link <?php if($tab): ?> <?php if($tab->description == 7): ?> active <?php endif; ?> <?php endif; ?>" id="v-pills-namara-tab" data-bs-toggle="pill" data-bs-target="#v-pills-namara" type="button" role="tab" aria-controls="v-pills-namara" aria-selected="false" onclick="tab(7,<?php echo e($id); ?>);">McNAMARA's Analysis</button>
                  <button class="nav-link <?php if($tab): ?> <?php if($tab->description == 8): ?> active <?php endif; ?> <?php endif; ?>" id="v-pills-raksoi-tab" data-bs-toggle="pill" data-bs-target="#v-pills-raksoi" type="button" role="tab" aria-controls="v-pills-raksoi" aria-selected="false" onclick="tab(8,<?php echo e($id); ?>);">Raksoi Jarabak's Analysis</button>
                  <button class="nav-link <?php if($tab): ?> <?php if($tab->description == 9): ?> active <?php endif; ?> <?php endif; ?>" id="v-pills-tweeds-tab" data-bs-toggle="pill" data-bs-target="#v-pills-tweeds" type="button" role="tab" aria-controls="v-pills-tweeds" aria-selected="false" onclick="tab(9,<?php echo e($id); ?>);">Tweeds & Ricketts</button>
                  <button class="nav-link <?php if($tab): ?> <?php if($tab->description == 10): ?> active <?php endif; ?> <?php endif; ?>" id="v-pills-soft-tab" data-bs-toggle="pill" data-bs-target="#v-pills-soft" type="button" role="tab" aria-controls="v-pills-soft" aria-selected="false" onclick="tab(10,<?php echo e($id); ?>);">Soft Tissue Analysis</button>
                  <button class="nav-link <?php if($tab): ?> <?php if($tab->description == 11): ?> active <?php endif; ?> <?php endif; ?>" id="v-pills-burstone-hard-tab" data-bs-toggle="pill" data-bs-target="#v-pills-burstone-hard" type="button" role="tab" aria-controls="v-pills-burstone-hard" aria-selected="false" onclick="tab(11,<?php echo e($id); ?>);">Burstone Analysis (Hard Tissue)</button>
                  <button class="nav-link <?php if($tab): ?> <?php if($tab->description == 12): ?> active <?php endif; ?> <?php endif; ?>" id="v-pills-burstone-soft-tab" data-bs-toggle="pill" data-bs-target="#v-pills-burstone-soft" type="button" role="tab" aria-controls="v-pills-burstone-soft" aria-selected="false" onclick="tab(12,<?php echo e($id); ?>);">Burstone Analysis (Soft Tissue)</button>
                  <button class="nav-link <?php if($tab): ?> <?php if($tab->description == 13): ?> active <?php endif; ?> <?php endif; ?>" id="v-pills-model_analysis-tab" data-bs-toggle="pill" data-bs-target="#v-pills-model_analysis" type="button" role="tab" aria-controls="v-pills-model_analysis" aria-selected="false" onclick="tab(13,<?php echo e($id); ?>);">Model Analysis</button>
                  <button class="nav-link <?php if($tab): ?> <?php if($tab->description == 14): ?> active <?php endif; ?> <?php endif; ?>" id="v-pills-perimeter-analysis-tab" data-bs-toggle="pill" data-bs-target="#v-pills-perimeter-analysis" type="button" role="tab" aria-controls="v-pills-perimeter-analysis" aria-selected="false" onclick="tab(14,<?php echo e($id); ?>);">Careys/Arch Perimeter Analysis</button>
                  <button class="nav-link <?php if($tab): ?> <?php if($tab->description == 15): ?> active <?php endif; ?> <?php endif; ?>" id="v-pills-maxillary-space-tab" data-bs-toggle="pill" data-bs-target="#v-pills-maxillary-space" type="button" role="tab" aria-controls="v-pills-maxillary-space" aria-selected="false" onclick="tab(15,<?php echo e($id); ?>);">Space analysis (Maxillary)</button>
                  <button class="nav-link <?php if($tab): ?> <?php if($tab->description == 16): ?> active <?php endif; ?> <?php endif; ?>" id="v-pills-mandibular-space-tab" data-bs-toggle="pill" data-bs-target="#v-pills-mandibular-space" type="button" role="tab" aria-controls="v-pills-mandibular-space" aria-selected="false" onclick="tab(16,<?php echo e($id); ?>);">Space analysis (Mandibular)</button>
                  <button class="nav-link <?php if($tab): ?> <?php if($tab->description == 17): ?> active <?php endif; ?> <?php endif; ?>" id="v-pills-diagnosit-plan-tab" data-bs-toggle="pill" data-bs-target="#v-pills-diagnosit-plan" type="button" role="tab" aria-controls="v-pills-diagnosit-plan" aria-selected="false" onclick="tab(17,<?php echo e($id); ?>);">Diagnosis & Treatment Plan</button>
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
                  <div class="tab-pane fade <?php if($tab): ?>  <?php if($tab->description == 4): ?> show active <?php endif; ?> <?php endif; ?>" id="v-pills-occulsion" role="tabpanel" aria-labelledby="v-pills-occulsion-tab" style="background: #f4f6ff; padding: 5px; overflow-y: scroll; height: 82vh">
                  <?php echo $__env->make('admin.tabs.model_occulsion', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </div>
                  <div class="tab-pane fade <?php if($tab): ?>  <?php if($tab->description == 5): ?> show active <?php endif; ?> <?php endif; ?>" id="v-pills-Cephalometric" role="tabpanel" aria-labelledby="v-pills-Cephalometric-tab" style="background: #f4f6ff; padding: 5px; overflow-y: scroll; height: 82vh: width: 100%">
                  <?php echo $__env->make('admin.tabs.cephalometric_analysis', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </div>
                  <div class="tab-pane fade <?php if($tab): ?>  <?php if($tab->description == 6): ?> show active <?php endif; ?> <?php endif; ?>" id="v-pills-steiner" role="tabpanel" aria-labelledby="v-pills-steiner-tab" style="background: #f4f6ff; padding: 5px; overflow-y: scroll; height: 82vh: width: 100%">
                  <?php echo $__env->make('admin.tabs.steiner_analysis', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </div>
                  <div class="tab-pane fade <?php if($tab): ?>  <?php if($tab->description == 7): ?> show active <?php endif; ?> <?php endif; ?>" id="v-pills-namara" role="tabpanel" aria-labelledby="v-pills-namara-tab" style="background: #f4f6ff; padding: 5px; overflow-y: scroll; height: 82vh: width: 100%">
                  <?php echo $__env->make('admin.tabs.Mcnamaras_analysis', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </div>
                  <div class="tab-pane fade <?php if($tab): ?>  <?php if($tab->description == 8): ?> show active <?php endif; ?> <?php endif; ?>" id="v-pills-raksoi" role="tabpanel" aria-labelledby="v-pills-raksoi-tab" style="background: #f4f6ff; padding: 5px; overflow-y: scroll; height: 82vh: width: 100%">
                  <?php echo $__env->make('admin.tabs.raksoi_analysis', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </div>
                  <div class="tab-pane fade <?php if($tab): ?>  <?php if($tab->description == 9): ?> show active <?php endif; ?> <?php endif; ?>" id="v-pills-tweeds" role="tabpanel" aria-labelledby="v-pills-tweeds-tab" style="background: #f4f6ff; padding: 5px; overflow-y: scroll; height: 82vh: width: 100%">
                  <?php echo $__env->make('admin.tabs.tweeds_analysis', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </div>
                  <div class="tab-pane fade <?php if($tab): ?>  <?php if($tab->description == 10): ?> show active <?php endif; ?> <?php endif; ?>" id="v-pills-soft" role="tabpanel" aria-labelledby="v-pills-soft-tab" style="background: #f4f6ff; padding: 5px; overflow-y: scroll; height: 82vh: width: 100%">
                  <?php echo $__env->make('admin.tabs.soft_tissue_analysis', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </div>
                  <div class="tab-pane fade <?php if($tab): ?>  <?php if($tab->description == 11): ?> show active <?php endif; ?> <?php endif; ?>" id="v-pills-burstone-hard" role="tabpanel" aria-labelledby="v-pills-burstone-hard-tab" style="background: #f4f6ff; padding: 5px; overflow-y: scroll; height: 82vh: width: 100%">
                  <?php echo $__env->make('admin.tabs.burstone_hard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </div>
                  <div class="tab-pane fade <?php if($tab): ?>  <?php if($tab->description == 12): ?> show active <?php endif; ?> <?php endif; ?>" id="v-pills-burstone-soft" role="tabpanel" aria-labelledby="v-pills-burstone-soft-tab" style="background: #f4f6ff; padding: 5px; overflow-y: scroll; height: 82vh: width: 100%">
                  <?php echo $__env->make('admin.tabs.burstone_soft', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </div>
                  <div class="tab-pane fade <?php if($tab): ?>  <?php if($tab->description == 13): ?> show active <?php endif; ?> <?php endif; ?>" id="v-pills-model_analysis" role="tabpanel" aria-labelledby="v-pills-model_analysis-tab" style="background: #f4f6ff; padding: 5px; overflow-y: scroll; height: 82vh: width: 100%">
                  <?php echo $__env->make('admin.tabs.model_analysis', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </div>
                  <div class="tab-pane fade <?php if($tab): ?>  <?php if($tab->description == 14): ?> show active <?php endif; ?> <?php endif; ?>" id="v-pills-perimeter-analysis" role="tabpanel" aria-labelledby="v-pills-perimeter-analysis-tab" style="background: #f4f6ff; padding: 5px; overflow-y: scroll; height: 82vh: width: 100%">
                  <?php echo $__env->make('admin.tabs.perimeter_analysis', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </div>
                  <div class="tab-pane fade <?php if($tab): ?>  <?php if($tab->description == 15): ?> show active <?php endif; ?> <?php endif; ?>" id="v-pills-maxillary-space" role="tabpanel" aria-labelledby="v-pills-maxillary-space-tab" style="background: #f4f6ff; padding: 5px; overflow-y: scroll; height: 82vh: width: 100%">
                  <?php echo $__env->make('admin.tabs.space-analysis-maxillary', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </div>
                  <div class="tab-pane fade <?php if($tab): ?>  <?php if($tab->description == 16): ?> show active <?php endif; ?> <?php endif; ?>" id="v-pills-mandibular-space" role="tabpanel" aria-labelledby="v-pills-mandibular-space-tab" style="background: #f4f6ff; padding: 5px; overflow-y: scroll; height: 82vh: width: 100%">
                  <?php echo $__env->make('admin.tabs.space-analysis-mandibular', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </div>
                  <div class="tab-pane fade <?php if($tab): ?>  <?php if($tab->description == 17): ?> show active <?php endif; ?> <?php endif; ?>" id="v-pills-diagnosit-plan" role="tabpanel" aria-labelledby="v-pills-diagnosit-plan-tab" style="background: #f4f6ff; padding: 5px; overflow-y: scroll; height: 82vh: width: 100%">
                  <?php echo $__env->make('admin.tabs.diagnosis-treat-plan', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
  .nav-pills .nav-link {
    border-radius: var(--bs-nav-pills-border-radius);
    border: 1px solid black;
    margin: 5px 0px;
}
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

<?php echo $__env->make('Layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\VeerIt\Downloads\one_scan\resources\views/admin/addHistory.blade.php ENDPATH**/ ?>
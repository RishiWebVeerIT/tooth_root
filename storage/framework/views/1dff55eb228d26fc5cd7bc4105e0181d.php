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
  <!-- Default Card -->

  <div class="card" style="padding: 50px;" id="DivIdToPrint">
            <div class="card-body">
              <h5 class="text-center" style=" padding: 20px 0 15px 0;
    font-size: 26px;
    font-weight: 500;
    color: #012970;
    text-align: center;
    font-family: Poppins, sans-serif">Case Report</h5>
              <hr>
             <table width="100%">
                <tr>
                    <td style=" padding: 20px 0 15px 0;
    font-size: 18px;
    font-weight: 500;
    color: #012970;
    font-family: Poppins, sans-serif;"><b>Name : </b><?php echo e($patient->name); ?></td>
                    <td style=" padding: 20px 0 15px 0;
    font-size: 18px;
    font-weight: 500;
    color: #012970;
    font-family: Poppins, sans-serif;"><b>Age : </b><?php echo e($patient->age); ?> Yr.</td>
                    <td style=" padding: 20px 0 15px 0;
    font-size: 18px;
    font-weight: 500;
    color: #012970;
    font-family: Poppins, sans-serif;"><b>Sex : </b><?php echo e(ucfirst($patient->sex)); ?></td>
                    <td style=" padding: 20px 0 15px 0;
    font-size: 18px;
    font-weight: 500;
    color: #012970;
    font-family: Poppins, sans-serif;"><b>Date of Birth : </b><?php echo e($patient->dob); ?></td>
                </tr>
                <tr>
                    <td style=" padding: 20px 0 15px 0;
    font-size: 18px;
    font-weight: 500;
    color: #012970;
    font-family: Poppins, sans-serif;"><b>Ortho No. : </b><?php echo e($patient->ortho_no); ?></td>
                    <td style=" padding: 20px 0 15px 0;
    font-size: 18px;
    font-weight: 500;
    color: #012970;
    font-family: Poppins, sans-serif;"><b>O.P. No. : </b><?php echo e($patient->op_no); ?></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="4" style=" padding: 20px 0 15px 0;
    font-size: 18px;
    font-weight: 500;
    color: #012970;
    font-family: Poppins, sans-serif;"><b>Address : </b><?php echo e($patient->address); ?>, <?php echo e($patient->city); ?>, <?php echo e($patient->zip); ?></td>
                </tr>
                <tr>
                    <td colspan="2" style=" padding: 20px 0 15px 0;
    font-size: 18px;
    font-weight: 500;
    color: #012970;
    font-family: Poppins, sans-serif;"><b>Ethnic Origin : </b><?php echo e($patient->origin); ?></td>
                    <td colspan="2" style=" padding: 20px 0 15px 0;
    font-size: 18px;
    font-weight: 500;
    color: #012970;
    font-family: Poppins, sans-serif;"><b>Religion : </b><?php echo e($patient->religion); ?></td>
                </tr>
             </table>
<br> <hr> <br>
             <?php
          $sub_t = array('pre','mid','post');
          ?>

                <?php for($i = 0; $i < count($sub_t); $i++): ?>

                <?php if($sub_t[$i] == 'pre' && in_array('pre', $img_title) ): ?>
                <h5 style=" padding: 20px 0 15px 0;
    font-size: 26px;
    font-weight: 500;
    color: #012970;
    text-align: center;
    font-family: Poppins, sans-serif">Pre-Treatment</h5>
                <?php $title = 'Pre-Treatment'; ?>
                <?php elseif($sub_t[$i] == 'mid' && in_array('mid', $img_title)): ?>
                <h5 style=" padding: 20px 0 15px 0;
    font-size: 26px;
    font-weight: 500;
    color: #012970;
    text-align: center;
    font-family: Poppins, sans-serif">Mid-Treatment</h5>
                <?php $title = 'Mid-Treatment'; ?>
                <?php elseif($sub_t[$i] == 'post' && in_array('post', $img_title)): ?>
                <h5 style=" padding: 20px 0 15px 0;
    font-size: 26px;
    font-weight: 500;
    color: #012970;
    text-align: center;
    font-family: Poppins, sans-serif">Post-Treatment</h5>
                <?php $title = 'Post-Treatment'; ?>
                <?php endif; ?>

                <?php if(in_array($sub_t[$i], $img_title) && in_array('photograph', $sub_title) && in_array('external', $child_title)): ?>
                <h5 style=" padding: 20px 0 15px 0;
    font-size: 18px;
    font-weight: 500;
    color: #012970;
    font-family: Poppins, sans-serif;" style="margin-left: 50px;">Pre-Treatment Photograph - External </h5>
                <?php endif; ?>

                <?php $__empty_1 = true; $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php if($image->tittle == $sub_t[$i]  && $image->sub_title == 'photograph' && $image->child_title == 'external'): ?>
                        <img src="<?php echo e(asset('uploads/'.$image->url)); ?>" style="width: 200px"/>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <?php endif; ?>

                <?php if(in_array($sub_t[$i], $img_title) && in_array('photograph', $sub_title) && in_array('internal', $child_title)): ?>
                <h5 style=" padding: 20px 0 15px 0;
    font-size: 18px;
    font-weight: 500;
    color: #012970;
    font-family: Poppins, sans-serif;" style="margin-left: 50px;">Pre-Treatment Photograph - Internal </h5>
                <?php endif; ?>
             <?php $__empty_1 = true; $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php if($image->tittle == $sub_t[$i]  && $image->sub_title == 'photograph' && $image->child_title == 'internal'): ?>

                        <img src="<?php echo e(asset('uploads/'.$image->url)); ?>" style="width: 200px"/>

                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
             <?php endif; ?>

             <?php if(in_array($sub_t[$i], $img_title) && in_array('radiograph', $sub_title) && in_array('lap', $child_title)): ?>
             <h5 style=" padding: 20px 0 15px 0;
    font-size: 18px;
    font-weight: 500;
    color: #012970;
    font-family: Poppins, sans-serif;" style="margin-left: 50px;">Pre-Treatment Radiograph - Lap </h5>
             <?php endif; ?>

             <?php $__empty_1 = true; $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php if($image->tittle == $sub_t[$i]  && $image->sub_title == 'radiograph' && $image->child_title == 'lap'): ?>

                        <img src="<?php echo e(asset('uploads/'.$image->url)); ?>" style="width: 200px"/>

                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
             <?php endif; ?>

             <?php if(in_array($sub_t[$i], $img_title) && in_array('radiograph', $sub_title) && in_array('opg', $child_title)): ?>
             <h5 style=" padding: 20px 0 15px 0;
    font-size: 18px;
    font-weight: 500;
    color: #012970;
    font-family: Poppins, sans-serif;" style="margin-left: 50px;">Pre-Treatment Radiograph - OPG</h5>
             <?php endif; ?>

             <?php $__empty_1 = true; $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php if($image->tittle == $sub_t[$i]  && $image->sub_title == 'radiograph' && $image->child_title == 'opg'): ?>

                        <img src="<?php echo e(asset('uploads/'.$image->url)); ?>" style="width: 200px"/>

                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
             <?php endif; ?>

             <?php if(in_array($sub_t[$i], $img_title) && in_array('study', $sub_title) && in_array('NA', $child_title)): ?>
             <h5 style=" padding: 20px 0 15px 0;
    font-size: 18px;
    font-weight: 500;
    color: #012970;
    font-family: Poppins, sans-serif;" style="margin-left: 50px;">Study Model</h5>
             <?php endif; ?>

             <?php $__empty_1 = true; $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php if($image->tittle == $sub_t[$i]  && $image->sub_title == 'study' && $image->child_title == 'NA'): ?>

                      <img src="<?php echo e(asset('uploads/'.$image->url)); ?>" style="width: 200px"/>

                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
             <?php endif; ?>
                <?php endfor; ?>
<div class="pagebreak"> </div>

                <br><br>
            <h5 class="text-center" style=" padding: 20px 0 15px 0;
    font-size: 26px;
    font-weight: 500;
    color: #012970;
    text-align: center;
    font-family: Poppins, sans-serif">History</h5>
              <hr>

              <table width="100%">
                <tr>
                    <td style=" padding: 20px 0 15px 0;
    font-size: 18px;
    font-weight: 500;
    color: #012970;
    font-family: Poppins, sans-serif;"><b>1. Chief Complaint</b></td>
                    <td style=" padding: 20px 0 15px 0;
    font-size: 18px;
    font-weight: 500;
    color: #012970;
    font-family: Poppins, sans-serif;" colspan="3"><?php echo e($history->chief_complaint); ?></td>
                </tr>
                <tr>
                <td colspan="4"> <hr> </td>
                </tr>
                 <tr>
                    <td style=" padding: 20px 0 15px 0;
    font-size: 18px;
    font-weight: 500;
    color: #012970;
    font-family: Poppins, sans-serif;"><b>2. Pre Natal History</b></td>
                    <td style=" padding: 20px 0 15px 0;
    font-size: 18px;
    font-weight: 500;
    color: #012970;
    font-family: Poppins, sans-serif;" colspan="3">
                        <ul>
                            <li><b>Informer : </b> &nbsp;  &nbsp;  &nbsp; <?php echo e($history->informer); ?></li>
                            <li><b>Condition of Mother during Pregnancy : </b> &nbsp;  &nbsp;  &nbsp; <?php echo e($history->cond_mother_dur_pregnacy); ?></li>
                            <li><b>Type of Deliver : </b> &nbsp;  &nbsp;  &nbsp; <?php echo e($history->delivery_type); ?></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                <td colspan="4"> <hr> </td>
                </tr>
                <tr>
                    <td style=" padding: 20px 0 15px 0;
    font-size: 18px;
    font-weight: 500;
    color: #012970;
    font-family: Poppins, sans-serif;"><b>3. Post Natal History</b></td>
                    <td style=" padding: 20px 0 15px 0;
    font-size: 18px;
    font-weight: 500;
    color: #012970;
    font-family: Poppins, sans-serif;" colspan="3">
                        <ul>
                            <li><b>Feeding : </b> &nbsp;  &nbsp;  &nbsp; <?php echo e($history->feeding); ?></li>
                            <li><b>Duration and Frequency of Bottle : </b> &nbsp;  &nbsp;  &nbsp; <?php echo e($history->dur_freq_of_bottle); ?></li>
                            <li><b>Milestone of Development : </b> &nbsp;  &nbsp;  &nbsp; <?php echo e($history->deve_milestone); ?></li>
                            <li><b>Crawling : </b> &nbsp;  &nbsp;  &nbsp; <?php echo e($history->crawling); ?></li>
                            <li><b>Walking : </b> &nbsp;  &nbsp;  &nbsp; <?php echo e($history->walking); ?></li>
                            <li><b>Speech : </b> &nbsp;  &nbsp;  &nbsp; <?php echo e($history->speech); ?></li>
                            <li><b>First tooth appearance : </b> &nbsp;  &nbsp;  &nbsp; <?php echo e($history->first_tooth); ?></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                <td colspan="4"> <hr> </td>
                </tr>
                <tr>
                    <td style=" padding: 20px 0 15px 0;
    font-size: 18px;
    font-weight: 500;
    color: #012970;
    font-family: Poppins, sans-serif;"><b>4. Childhood Diseases</b></td>
                    <td style=" padding: 20px 0 15px 0;
    font-size: 18px;
    font-weight: 500;
    color: #012970;
    font-family: Poppins, sans-serif;" colspan="3">
                        <?php echo e($history->childhood_diseases); ?>

                    </td>
                </tr>
                <tr>
                <td colspan="4"> <hr> </td>
                </tr>
                <tr>
                    <td style=" padding: 20px 0 15px 0;
    font-size: 18px;
    font-weight: 500;
    color: #012970;
    font-family: Poppins, sans-serif;"><b>5. Habits</b></td>
                    <td style=" padding: 20px 0 15px 0;
    font-size: 18px;
    font-weight: 500;
    color: #012970;
    font-family: Poppins, sans-serif;" colspan="3">
                        <ul>
                            <li><b>Habit : </b> &nbsp;  &nbsp;  &nbsp; <?php echo e($history->habits); ?></li>
                            <li><b>Up Age : </b> &nbsp;  &nbsp;  &nbsp; <?php echo e($history->up_age); ?></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                <td colspan="4"> <hr> </td>
                </tr>
                <tr>
                    <td style=" padding: 20px 0 15px 0;
    font-size: 18px;
    font-weight: 500;
    color: #012970;
    font-family: Poppins, sans-serif;"><b>6. Injuries</b></td>
                    <td style=" padding: 20px 0 15px 0;
    font-size: 18px;
    font-weight: 500;
    color: #012970;
    font-family: Poppins, sans-serif;" colspan="3">
                        <?php echo e($history->injuries); ?>

                    </td>
                </tr>
                <tr>
                <td colspan="4"> <hr> </td>
                </tr>
                <tr>
                    <td style=" padding: 20px 0 15px 0;
    font-size: 18px;
    font-weight: 500;
    color: #012970;
    font-family: Poppins, sans-serif;"><b>7. Familial Malocclusion History</b></td>
                    <td style=" padding: 20px 0 15px 0;
    font-size: 18px;
    font-weight: 500;
    color: #012970;
    font-family: Poppins, sans-serif;" colspan="3">
                        <ul>
                            <li><b>Parent : </b> &nbsp;  &nbsp;  &nbsp; <?php echo e($history->parent); ?></li>
                            <li><b>Sibling : </b> &nbsp;  &nbsp;  &nbsp; <?php echo e($history->sibling); ?></li>
                            <li><b>Similar : </b> &nbsp;  &nbsp;  &nbsp; <?php echo e($history->similar); ?> <br> <b>Dissimilar : </b> &nbsp;  &nbsp;  &nbsp; <?php echo e($history->dissimilar); ?></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                <td colspan="4"> <hr> </td>
                </tr>
                <tr>
                    <td style=" padding: 20px 0 15px 0;
    font-size: 18px;
    font-weight: 500;
    color: #012970;
    font-family: Poppins, sans-serif;"><b>8. General History</b></td>
                    <td style=" padding: 20px 0 15px 0;
    font-size: 18px;
    font-weight: 500;
    color: #012970;
    font-family: Poppins, sans-serif;" colspan="3">
                        <ul>
                            <li><b>Reasons for taking Orthodontic Treatment : </b> &nbsp;  &nbsp;  &nbsp; <?php echo e($history->treatment_reason); ?></li>
                            <li><b>Esthetics/Functional/Speech/Hygiene : </b> &nbsp;  &nbsp;  &nbsp; <?php echo e($history->functional_hygiene); ?></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                <td colspan="4"> <hr> </td>
                </tr>
                <tr>
                    <td style=" padding: 20px 0 15px 0;
    font-size: 18px;
    font-weight: 500;
    color: #012970;
    font-family: Poppins, sans-serif;"><b>9. past Dental History</b></td>
                    <td style=" padding: 20px 0 15px 0;
    font-size: 18px;
    font-weight: 500;
    color: #012970;
    font-family: Poppins, sans-serif;" colspan="3">
                        <?php echo e($history->past_history); ?>

                    </td>
                </tr>
                <tr>
                <td colspan="4"> <hr> </td>
                </tr>
                <tr>
                    <td style=" padding: 20px 0 15px 0;
    font-size: 18px;
    font-weight: 500;
    color: #012970;
    font-family: Poppins, sans-serif;"><b>10. Pubertal Status</b></td>
                    <td style=" padding: 20px 0 15px 0;
    font-size: 18px;
    font-weight: 500;
    color: #012970;
    font-family: Poppins, sans-serif;" colspan="3">
                        <?php echo e($history->pubertal_status); ?>

                    </td>
                </tr>
                <tr>
                <td colspan="4"> <hr> </td>
                </tr>
                <tr>
                    <td style=" padding: 20px 0 15px 0;
    font-size: 18px;
    font-weight: 500;
    color: #012970;
    font-family: Poppins, sans-serif;"><b>11. Any Other Information</b></td>
                    <td style=" padding: 20px 0 15px 0;
    font-size: 18px;
    font-weight: 500;
    color: #012970;
    font-family: Poppins, sans-serif;" colspan="3">
                        <?php echo e($history->other_info); ?>

                    </td>
                </tr>
             </table>
            </div>
          </div><!-- End Default Card -->
<button class="btn btn-primary w-100" onclick="printDiv();">Print</button>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('style'); ?>
<style>
    .imgtitle{
    padding: 20px 0 15px 0;
    font-size: 26px;
    font-weight: 500;
    color: #012970;
    text-align: center;
    font-family: "Poppins", sans-serif;
}
li {
  margin: 15px 0;
}
@media print {
    .pagebreak { page-break-before: always; } /* page-break-after works, as well */
    li {
  margin: 15px 0;
}

 .imgtitle{
    padding: 20px 0 15px 0;
    font-size: 26px;
    font-weight: 500;
    color: #012970;
    text-align: center;
    font-family: "Poppins", sans-serif;
}
.card-title{
        padding: 20px 0 15px 0;
    font-size: 18px;
    font-weight: 500;
    color: #012970;
    font-family: Poppins, sans-serif;
}
}
</style>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('script'); ?>
<script>
 function printDiv()
{

  var divToPrint=document.getElementById('DivIdToPrint');

  var newWin=window.open('','Print-Window');

  newWin.document.open();

  newWin.document.write('<html><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');

  newWin.document.close();

  setTimeout(function(){newWin.close();},10);

}
</script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('Layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ToothRoot\tooth_root\resources\views/admin/patientDetail.blade.php ENDPATH**/ ?>
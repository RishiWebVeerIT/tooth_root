
<?php $__env->startSection('section'); ?>]
<h2 style="text-align: center; margin-top:200px;">Records</h2>
<div class="card" style="padding: 50px;" id="DivIdToPrint">
            <div class="card-body">
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
                <div style=" padding: 20px 0 15px 0;
    font-size: 26px;
    font-weight: 500;
    color: #012970;
    text-align: center;
    font-family: Poppins, sans-serif">Pre-Treatment</div>
                <?php $title = 'Pre-Treatment'; ?>
                <?php elseif($sub_t[$i] == 'mid' && in_array('mid', $img_title)): ?>
                <div style=" padding: 20px 0 15px 0;
    font-size: 26px;
    font-weight: 500;
    color: #012970;
    text-align: center;
    font-family: Poppins, sans-serif">Mid-Treatment</div>
                <?php $title = 'Mid-Treatment'; ?>
                <?php elseif($sub_t[$i] == 'post' && in_array('post', $img_title)): ?>
                <div style=" padding: 20px 0 15px 0;
    font-size: 26px;
    font-weight: 500;
    color: #012970;
    text-align: center;
    font-family: Poppins, sans-serif">Post-Treatment</div>
                <?php $title = 'Post-Treatment'; ?>
                <?php endif; ?>

                <?php if(in_array($sub_t[$i], $img_title) && in_array('photograph', $sub_title) && in_array('external', $child_title)): ?>
                <div style=" padding: 20px 0 15px 0;
    font-size: 18px;
    font-weight: 500;
    color: #012970;
    font-family: Poppins, sans-serif;" style="margin-left: 50px;">Pre-Treatment Photograph - External </div>
                <?php endif; ?>

                <?php $__empty_1 = true; $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php if($image->tittle == $sub_t[$i]  && $image->sub_title == 'photograph' && $image->child_title == 'external'): ?>
                        <img src="<?php echo e(asset('uploads/'.$image->url)); ?>" style="width: 200px"/>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <?php endif; ?>

                <?php if(in_array($sub_t[$i], $img_title) && in_array('photograph', $sub_title) && in_array('internal', $child_title)): ?>
                <div style=" padding: 20px 0 15px 0;
    font-size: 18px;
    font-weight: 500;
    color: #012970;
    font-family: Poppins, sans-serif;" style="margin-left: 50px;">Pre-Treatment Photograph - Internal </div>
                <?php endif; ?>
             <?php $__empty_1 = true; $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php if($image->tittle == $sub_t[$i]  && $image->sub_title == 'photograph' && $image->child_title == 'internal'): ?>

                        <img src="<?php echo e(asset('uploads/'.$image->url)); ?>" style="width: 200px"/>

                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
             <?php endif; ?>

             <?php if(in_array($sub_t[$i], $img_title) && in_array('radiograph', $sub_title) && in_array('lap', $child_title)): ?>
             <div style=" padding: 20px 0 15px 0;
    font-size: 18px;
    font-weight: 500;
    color: #012970;
    font-family: Poppins, sans-serif;" style="margin-left: 50px;">Pre-Treatment Radiograph - Lap </div>
             <?php endif; ?>

             <?php $__empty_1 = true; $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php if($image->tittle == $sub_t[$i]  && $image->sub_title == 'radiograph' && $image->child_title == 'lap'): ?>

                        <img src="<?php echo e(asset('uploads/'.$image->url)); ?>" style="width: 200px"/>

                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
             <?php endif; ?>

             <?php if(in_array($sub_t[$i], $img_title) && in_array('radiograph', $sub_title) && in_array('opg', $child_title)): ?>
             <div style=" padding: 20px 0 15px 0;
    font-size: 18px;
    font-weight: 500;
    color: #012970;
    font-family: Poppins, sans-serif;" style="margin-left: 50px;">Pre-Treatment Radiograph - OPG</div>
             <?php endif; ?>

             <?php $__empty_1 = true; $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php if($image->tittle == $sub_t[$i]  && $image->sub_title == 'radiograph' && $image->child_title == 'opg'): ?>

                        <img src="<?php echo e(asset('uploads/'.$image->url)); ?>" style="width: 200px"/>

                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
             <?php endif; ?>

             <?php if(in_array($sub_t[$i], $img_title) && in_array('study', $sub_title) && in_array('NA', $child_title)): ?>
             <div style=" padding: 20px 0 15px 0;
    font-size: 18px;
    font-weight: 500;
    color: #012970;
    font-family: Poppins, sans-serif;" style="margin-left: 50px;">Study Model</div>
             <?php endif; ?>

             <?php $__empty_1 = true; $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php if($image->tittle == $sub_t[$i]  && $image->sub_title == 'study' && $image->child_title == 'NA'): ?>

                      <img src="<?php echo e(asset('uploads/'.$image->url)); ?>" style="width: 200px"/>

                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
             <?php endif; ?>
                <?php endfor; ?>
<div class="pagebreak"> </div>

            

            </div>
          </div><!-- End Default Card -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\OneScan\one_scan\resources\views/user/records.blade.php ENDPATH**/ ?>
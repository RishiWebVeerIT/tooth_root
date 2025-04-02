<div class="card" style="padding: 20px;">
  <div class="card-body">

    <!-- Floating Labels Form -->
    <form class="row g-3" method='post' action="#" enctype="multipart/form-data">
      <?php echo csrf_field(); ?>
      <input type="hidden" class="form-control" name="id" id="floatingcity" value="<?php echo e($id); ?>">
      <h5 class="card-title text-center">Space Analysis</h5>
      <h5 class="card-title">Mandibular</h5>
      <?php $i=1; 
      $arr = ['Proclination','Crowding','Ant-Rotation','Deep curve of Spec','Impacted','Others'];
      $arr2 = ['Existing interdental spaces','Expansion','Post. Rotations','Correction of Retroclined teeth','Extraction','Distalization','Extraction of supernumeracy teeth','Uprighting of teeth','Others'];
      ?>
      
      <table class="table table-bordered text-center">
    <thead>
        <tr>
            <th>Sr.No.</th>
            <th>Condition to Correct</th>
            <th>Amount(mm)</th>
        </tr>
    </thead>
    <tbody>
        <tr><th colspan="3">Space Required</th></tr>
        <?php for($j=0; $j < count($arr); $j++): ?>
    <tr>
            <td><?php echo e($j+1); ?></td>
            <td><?php echo e($arr[$j]); ?></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <?php endfor; ?>
        <tr>
            <td></td>
        <td>Total</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr><th colspan="3">Space Available</th></tr>
        <?php for($k=0; $k < count($arr2); $k++): ?>
    <tr>
            <td><?php echo e($k+1); ?></td>
            <td><?php echo e($arr2[$k]); ?></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <?php endfor; ?>
        <tr>
        <td></td>
        <td>Total</td>
            <td><input type="text" class="form-control"></td>
        </tr>
    
    </tbody>
</table>
      <div class="text-center">

        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-secondary">Reset</button>

      </div>
    </form><!-- End floating Labels Form -->

  </div>
</div><?php /**PATH C:\Users\VeerIt\Downloads\one_scan\resources\views/admin/tabs/space-analysis-mandibular.blade.php ENDPATH**/ ?>
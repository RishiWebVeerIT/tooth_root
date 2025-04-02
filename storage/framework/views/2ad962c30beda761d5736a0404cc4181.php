<div class="card" style="padding: 20px;">
  <div class="card-body">

    <!-- Floating Labels Form -->
    <form class="row g-3" method='post' action="#" enctype="multipart/form-data">
      <?php echo csrf_field(); ?>
      <input type="hidden" class="form-control" name="id" id="floatingcity" value="<?php echo e($id); ?>">
      <h5 class="card-title">Down Analysis</h5>
      <?php $i=1; ?>
<table class="table table-bordered text-center">
    <thead>
        <tr>
            <th><?php echo e($i++); ?></th>
            <th>Measurement</th>
            <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
            <th>Mean Value</th>
            <th>Range</th>
            <th>Pt. Value</th>
            <th>inference</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo e($i++); ?></td>
            <td>Facial Angle</td>
            <td><input type="text" class="form-control"></td>
            <td>87.8<sup>0</sup></td>
            <td>82-95<sup>0</sup></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td><?php echo e($i++); ?></td>
            <td>Angle of Convexity</td>
            <td><input type="text" class="form-control"></td>
            <td>0<sup>0</sup></td>
            <td>-8.5 to +10<sup>0</sup></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td><?php echo e($i++); ?></td>
            <td>AB Plan Angle</td>
            <td><input type="text" class="form-control"></td>
            <td>-4.6<sup>0</sup></td>
            <td>-9 to 0<sup>0</sup></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td><?php echo e($i++); ?></td>
            <td>Mandibular Plane Angle</td>
            <td><input type="text" class="form-control"></td>
            <td>21.9<sup>0</sup></td>
            <td>17 to 28<sup>0</sup></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td><?php echo e($i++); ?></td>
            <td>Y-Axis</td>
            <td><input type="text" class="form-control"></td>
            <td>59.4<sup>0</sup></td>
            <td>53 to 66<sup>0</sup></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td><?php echo e($i++); ?></td>
            <td>Cant to Occle. Plane</td>
            <td><input type="text" class="form-control"></td>
            <td>9.3<sup>0</sup></td>
            <td>1.5 to 14<sup>0</sup></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td><?php echo e($i++); ?></td>
            <td>Inter inciasal Angle</td>
            <td><input type="text" class="form-control"></td>
            <td>135.4<sup>0</sup></td>
            <td>130 to 150<sup>0</sup></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td><?php echo e($i++); ?></td>
            <td>Incisor Occl. Plane Angle</td>
            <td><input type="text" class="form-control"></td>
            <td>14.5<sup>0</sup></td>
            <td>35. to 20<sup>0</sup></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td><?php echo e($i++); ?></td>
            <td>Incisor Mand. Plane Angle</td>
            <td><input type="text" class="form-control"></td>
            <td>1.4<sup>0</sup></td>
            <td>-8.5 to 7<sup>0</sup></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td><?php echo e($i++); ?></td>
            <td>Up 1 to A-pog Linear</td>
            <td><input type="text" class="form-control"></td>
            <td>2.7mm</td>
            <td>-1 to 5mm</td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
    </tbody>
</table>
      
      <br>

      <div class="text-center">

        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-secondary">Reset</button>

      </div>
    </form><!-- End floating Labels Form -->

  </div>
</div><?php /**PATH C:\Users\VeerIt\Downloads\one_scan\resources\views/admin/tabs/cephalometric_analysis.blade.php ENDPATH**/ ?>
<div class="card" style="padding: 20px;">
  <div class="card-body">

    <!-- Floating Labels Form -->
    <form class="row g-3" method='post' action="#" enctype="multipart/form-data">
      <?php echo csrf_field(); ?>
      <input type="hidden" class="form-control" name="id" id="floatingcity" value="<?php echo e($id); ?>">
      <h5 class="card-title">Soft Tissue Analysis</h5>
      <?php $i=1; ?>
      <table class="table table-bordered text-center">
    <thead>
        <tr>
            <th>Profile</th>
            <th>Normal</th>
            <th>Patient</th>
            <th>Inference</th>
        </tr>
    </thead>
    <tbody>
    <tr>
            <td>Nasomental Angle</td>
            <td>120 - 132<sup>0</sup></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Nasolabial Angle</td>
            <td>102 ± 4<sup>0</sup></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Uppar Lip Prominence</td>
            <td>1 - 2mm ahead</td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Lower Lip Prominence</td>
            <td>1mm behind</td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>'E'Line</td>
            <td>Up Lip mm behind <br> Lo. Lip 2mm behind</td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>'S' Line</td>
            <td></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>'H' Line</td>
            <td></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Merrified 'Z'Angle</td>
            <td>80 ± 9<sup>0</sup></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Soft Tissue Chin</td>
            <td>10 - 12mm</td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Thickness</td>
            <td></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
    </tbody>
</table>
<br><br>
      <h5 class="card-title">Frontal View</h5>
      <br>
Facial Symmetry : <select name="facial_symmetry" id="" class="form-control">
    <option value="">--Select--</option>
    <option value="Upper 1/3">Upper 1/3</option>
    <option value="Middle 1/3">Middle 1/3</option>
    <option value="Lower 1/3">Lower 1/3</option>
</select>
      <div class="text-center">

        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-secondary">Reset</button>

      </div>
    </form><!-- End floating Labels Form -->

  </div>
</div><?php /**PATH C:\Users\VeerIt\Downloads\one_scan\resources\views/admin/tabs/soft_tissue_analysis.blade.php ENDPATH**/ ?>
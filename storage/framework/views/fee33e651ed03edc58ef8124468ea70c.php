<div class="card" style="padding: 20px;">
  <div class="card-body">

    <!-- Floating Labels Form -->
    <form class="row g-3" method='post' action="#" enctype="multipart/form-data">
      <?php echo csrf_field(); ?>
      <input type="hidden" class="form-control" name="id" id="floatingcity" value="<?php echo e($id); ?>">
      <h5 class="card-title">Burstone Analysis(Soft Tissues)</h5>
      <?php $i=1; ?>
      <table class="table table-bordered text-center">
    <thead>
        <tr>
            <th>Landmarks</th>
            <th>Mean</th>
            <th>Patient Value</th>
            <th>Inference</th>
        </tr>
    </thead>
    <tbody>
        <tr><td colspan="4">Facial</td></tr>
    <tr>
            <td>Facial convexity angle (G-Sn-Pg)</td>
            <td>12 ± 4</td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
        <td>Maxillary Prognathism (G-Sn(HP))</td>
            <td>6 ± 3</td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
        <td>Mandibular Prognathism(G-Pg(HP))</td>
            <td>0 ± 4</td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Vertial Height Ratio (G-Sn/Sn-Ma)</td>
            <td>1 ± 1</td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
        <td>Lower Face Throat Length (Sn-Gn/C-Gn)</td>
            <td>100 ± 7</td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
        <td>Lower Vertical Height depth ratio (Sn-Gn/C-Gn)</td>
            <td>1:2</td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr><td colspan='4'>Lip Position & Form</td></tr>
        <tr>
            <td>Nasolabial Angle (Cm-Sn-Ls)</td>
            <td>102 ± 8</td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
        <td>Uppar Lip Portrusion(Ls to (Sn-Pg))</td>
            <td>3 ± 1</td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
        <td>Lower Lip Portrusion(Li to (Sn-Pg))</td>
            <td>2 ± 1</td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
        <td>Mentolabial sulucus (Si to (Sn-Pg))</td>
            <td>4 ± 2</td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Vertical Lip: Chin ratio (Sn Stm/St, -Me(Hp))</td>
            <td>0.5 ±</td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Maxillary Incisor Exposure (Stm u)</td>
            <td>2 ± 2</td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td> Inter Labial Exposure(Stm<sub>0</sub> - stm<sub>1</sub>)</td>
            <td>2 ± 2</td>
            <td><input type="text" class="form-control"></td>
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
</div><?php /**PATH C:\Users\VeerIt\Downloads\one_scan\resources\views/admin/tabs/burstone_soft.blade.php ENDPATH**/ ?>
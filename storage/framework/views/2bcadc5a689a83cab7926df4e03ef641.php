<div class="card" style="padding: 20px;">
  <div class="card-body">

    <!-- Floating Labels Form -->
    <form class="row g-3" method='post' action="#" enctype="multipart/form-data">
      <?php echo csrf_field(); ?>
      <input type="hidden" class="form-control" name="id" id="floatingcity" value="<?php echo e($id); ?>">
      <h5 class="card-title">Tweeds & Ricketts Analysis</h5>
      <?php $i=1; ?>
      <table class="table table-bordered text-center">
    <thead>
        <tr>
            <th>Angle</th>
            <th>Normal</th>
            <th>Patient</th>
            <th>Inference</th>
        </tr>
    </thead>
    <tbody>
    <tr>
            <td>FMPA</td>
            <td>25<sup>0</sup></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>FMIA</td>
            <td>65<sup>0</sup></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>IMPA</td>
            <td>90<sup>0</sup></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
    </tbody>
</table>
<br><br>
      <h5 class="card-title">RICKETTS ANALYSIS</h5>
      <br>
      <table class="table table-bordered text-center">
    <thead>
        <tr>
            <th>Angle</th>
            <th>Normal</th>
            <th>Patient</th>
            <th>Inference</th>
        </tr>
    </thead>
    <tbody>
    <tr>
            <td>Facial axix angle</td>
            <td>90<sup>0</sup> ± 3.5<sup>0</sup></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Facial Depth</td>
            <td>87<sup>0</sup> ± 3<sup>0</sup></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>MP Angle</td>
            <td>26<sup>0</sup> ± 4.5<sup>0</sup></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Convexity of pt. A</td>
            <td>2 ± 2mm</td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>L1 to APO (Angle)</td>
            <td>22<sup>0</sup> ± 4<sup>0</sup></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>L1 to APO (mm)</td>
            <td>1 ± 2mm</td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Us to PtV</td>
            <td>Age ± 3mm</td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>L.lip to E-plane</td>
            <td>-2<sup>0</sup> ± 2mm</td>
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
</div><?php /**PATH C:\Users\VeerIt\Downloads\one_scan\resources\views/admin/tabs/tweeds_analysis.blade.php ENDPATH**/ ?>
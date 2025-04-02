<div class="card" style="padding: 20px;">
  <div class="card-body">

    <!-- Floating Labels Form -->
    <form class="row g-3" method='post' action="#" enctype="multipart/form-data">
      <?php echo csrf_field(); ?>
      <input type="hidden" class="form-control" name="id" id="floatingcity" value="<?php echo e($id); ?>">
      <h5 class="card-title">Steiner's Analysis</h5>
      <?php $i=1; ?>
<table class="table table-bordered text-center">
    <thead>
        <tr>
         
            <th>Mesurement</th>
            <th>Mean/SD</th>
            <th>Actual</th>
            <th>Inference</th>
        </tr>
    </thead>
    <tbody>
    <tr>
            <td colspan="4"> SKELETAL </td>
        </tr>
        <tr>
            
            <td>SNA</td>
            <td>82<sup>0</sup></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            
            <td>SNB</td>
            <td>80<sup>0</sup></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            
            <td>SND</td>
            <td>76<sup>0</sup></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            
            <td>ANB</td>
            <td>2<sup>0</sup></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            
            <td>Go Gn to SN</td>
            <td>32<sup>0</sup></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td colspan="4"> DENTAL </td>
        </tr>
        <tr>
            
            <td>U1 to N-A (mm)</td>
            <td>4mm</td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            
            <td>U1 to N-A (angle)</td>
            <td>22<sup>0</sup></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            
            <td>L1 to N-B (mm)</td>
            <td>4mm</td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            
            <td>L1 to N-B (angle)</td>
            <td>25<sup>0</sup></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Po to N-B (mm)</td>
            <td></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Po & 1 to N-B (diff)</td>
            <td>131<sup>0</sup></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>1 to 1 (angle)</td>
            <td>131<sup>0</sup></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Occl. to S-N (angle)</td>
            <td></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
    </tbody>
</table>
      
      <br>
      <div class="col-12">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingSLine" placeholder="'S'Line">
          <label for="floatingSLine">'S' Line</label>
        </div>
      </div>
      <div class="col-12">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingULip" placeholder="ULip">
          <label for="floatingULip">U / Lip</label>
        </div>
      </div>
      <div class="col-12">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingLLip" placeholder="LLip">
          <label for="floatingLLip">L / Lip</label>
        </div>
      </div>

      <div class="text-center">

        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-secondary">Reset</button>

      </div>
    </form><!-- End floating Labels Form -->

  </div>
</div><?php /**PATH C:\Users\VeerIt\Downloads\one_scan\resources\views/admin/tabs/steiner_analysis.blade.php ENDPATH**/ ?>
<div class="card" style="padding: 20px;">
  <div class="card-body">

    <!-- Floating Labels Form -->
    <form class="row g-3" method='post' action="#" enctype="multipart/form-data">
      <?php echo csrf_field(); ?>
      <input type="hidden" class="form-control" name="id" id="floatingcity" value="<?php echo e($id); ?>">
      <h5 class="card-title">McNAMARA's Analysis</h5>
      <?php $i=1; ?>
<table class="table table-bordered text-center">
    <thead>
        <tr>
         
            <th>Mesurement</th>
            <th>Mean</th>
            <th>Actual</th>
            <th>Inference</th>
        </tr>
    </thead>
    <tbody>
   
        <tr>
            
            <td>N Perpendicular to A</td>
            <td>0 ± 2mm</td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            
            <td>SN Perpendicular to Pogonion</td>
            <td>0 to -4mm</td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            
            <td>Facial axis angle</td>
            <td>0<sup>0</sup></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            
            <td>Mand Plane angle</td>
            <td>26 ± 4<sup>0</sup></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Eff. Max Length</td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Eff. Mand Length</td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Maxillofacial differential</td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Lower ant. Face height</td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            
            <td>U1 to Point A Distance</td>
            <td>4mm</td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            
            <td>L1 to Apo Line Distance</td>
            <td>1-2mm</td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            
            <td>Naso Labial angle</td>
            <td>90-110<sup>0</sup></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
    </tbody>
</table>
      
      <br>
      <div class="col-12">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingSLine" placeholder="Pharyngeral Analysis">
          <label for="floatingSLine">Pharyngeral Analysis</label>
        </div>
      </div>
      <div class="col-12">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingULip" placeholder="Upper Air way">
          <label for="floatingULip">Upper Air way</label>
        </div>
      </div>
      <div class="col-12">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingLLip" placeholder="Lower Air Way">
          <label for="floatingLLip">Lower Air Way</label>
        </div>
      </div>

      <div class="text-center">

        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-secondary">Reset</button>

      </div>
    </form><!-- End floating Labels Form -->

  </div>
</div><?php /**PATH C:\Users\VeerIt\Downloads\one_scan\resources\views/admin/tabs/Mcnamaras_analysis.blade.php ENDPATH**/ ?>
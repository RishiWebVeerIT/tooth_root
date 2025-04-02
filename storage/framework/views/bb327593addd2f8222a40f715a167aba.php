<div class="card" style="padding: 20px;">
  <div class="card-body">

    <!-- Floating Labels Form -->
    <form class="row g-3" method='post' action="#" enctype="multipart/form-data">
      <?php echo csrf_field(); ?>
      <input type="hidden" class="form-control" name="id" id="floatingcity" value="<?php echo e($id); ?>">
      <h5 class="card-title">Raksoi Jarabak's Analysis</h5>
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
            
            <td>Saddle angle</td>
            <td>123 ± 5<sup>0</sup></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            
            <td>Articular angle</td>
            <td>143 ± 6<sup>0</sup></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            
            <td>Gonial Angle</td>
            <td>128 ± 7<sup>0</sup></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            
            <td>U/Gonial angle</td>
            <td>52 - 55<sup>0</sup></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            
            <td>L/Gonial angle</td>
            <td>72 - 75<sup>0</sup></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
</tr>
        <tr>
            
            <td>Sum of Posterior angles</td>
            <td>396 ± 60 <sup>0</sup></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            
            <td>Mandibular plane angle</td>
            <td>32<sup>0</sup></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            
            <td>Angle of Inclination</td>
            <td>85<sup>0</sup></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            
            <td>Pn to Occlusal plane</td>
            <td>75<sup>0</sup></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Pn to Mandibular plane</td>
            <td>65<sup>0</sup></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Basal plane angle</td>
            <td>25<sup>0</sup></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Palatal plane to Occ plane</td>
            <td>11<sup>0</sup></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Occlusal plane to MP</td>
            <td>1<sup>0</sup></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Ant. to Post. Face ht. Ratio</td>
            <td>62 - 65%</td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Y-Axis</td>
            <td>66<sup>0</sup></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Interincisal angle</td>
            <td>135<sup>0</sup></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>U1 to SN plane</td>
            <td>102<sup>0</sup> + 2<sup>0</sup></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>L1 to Palatal plane</td>
            <td>75<sup>0</sup> ± 2<sup>0</sup></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>L1 to Mandibular plane</td>
            <td>90<sup>0</sup> ± 3<sup>0</sup></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
    </tbody>
</table>
      
      <br><br>
      <h5 class="card-title">TWEED'S ANALYSIS</h5>
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
</div><?php /**PATH C:\Users\VeerIt\Downloads\one_scan\resources\views/admin/tabs/raksoi_analysis.blade.php ENDPATH**/ ?>
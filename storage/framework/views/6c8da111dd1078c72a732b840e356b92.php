<div class="card" style="padding: 20px;">
  <div class="card-body">

    <!-- Floating Labels Form -->
    <form class="row g-3" method='post' action="#" enctype="multipart/form-data">
      <?php echo csrf_field(); ?>
      <input type="hidden" class="form-control" name="id" id="floatingcity" value="<?php echo e($id); ?>">
      <h5 class="card-title">Burstone Analysis (Hard Tissue)</h5>
      <?php $i=1; ?>
      <table class="table table-bordered text-center">
    <thead>
        <tr>
        <th>Cranial Base</th>
            <th>Male</th>
            <th>Female</th>
            <th>Patient Value</th>
            <th>Inference</th>
        </tr>
    </thead>
    <tbody>
    <tr>
            <td>Ar-Ptm (∥ Hp)</td>
            <td>37.1 ± 2.8</td>
            <td>32.8 ± 1.9</td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
        <td>Ptm-N (∥ Hp)</td>
            <td>52.8 ± 4.1</td>
            <td>50.0 ± 3</td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td colspan="5"> Horizontal</td>
        </tr>
        <tr>
            <td>N-A-Pg (Angle)</td>
            <td>3.9<sup>0</sup> ± 6.4<sup>0</sup></td>
            <td>2.6<sup>0</sup> ± 5.1<sup>0</sup></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>N-A (∥ Hp)</td>
            <td>0.0 ± 3.7</td>
            <td>-2<sup>0</sup> ± 3.7</td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
        <td>1 N-B (∥ Hp)</td>
            <td>-5.3 ± 6.7</td>
            <td>-6.9 ± 4.3</td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <td>N-pg (∥ Hp)</td>
            <td>-4.3 ± 8.5</td>
            <td>-6.5 ± 5.</td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr><td colspan="5">Vertical</td></tr>
        <td>N-ANS (┸ Hp)</td>
            <td>54 ± 3.2</td>
            <td>50 ± 2.4</td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>ANS-Gn (┸ Hp)</td>
            <td>68.6 ± 3.8</td>
            <td>61.3 ± 3.3</td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        
        <tr>
        <td>Mp-Hp (Angle)</td>
            <td>23.0<sup>0</sup> ± 5.9<sup>0</sup></td>
            <td>24.2<sup>0</sup> ± 5<sup>0</sup></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
        <tr>
            <td>U,∥-NF (┸ NF)</td>
            <td>30.5 ± 2.1</td>
            <td>27.5 ± 1.7</td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
     
        <tr>
        <td>L,∥-Mp (┸ Mp)</td>
            <td>45.0 ± 2.1</td>
            <td>40.8 ± 1.8</td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>

        <tr>
        <td>U6,|-NF (┸ NF)</td>
            <td>30.5 ± 2.1</td>
            <td>27.5 ± 1.7</td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>

        <tr>
            <td>L6,|-Mp (┸ Mp)</td>
            <td></td>
            <td></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td colspan="5">Maxilla-Mandible</td>
        </tr>
        <tr>
            <td>PNS-ANS (∥Hp)</td>
            <td>57.5 ± 2.5</td>
            <td>52.6 ± 3.5</td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <td>Ar-Go (Linear)</td>
            <td>52.0 ± 4.2</td>
            <td>46.8 ± 2.5</td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>B-Pg (∥Mp)</td>
            <td>8.9 ± 1.7</td>
            <td>72 ± 1.9</td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <td>Ar-Go-Gn (Angle)</td>
            <td>119.1<sup>0</sup> ± 6.5<sup>0</sup></td>
            <td>112<sup>0</sup> ± 6.9<sup>0</sup></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td colspan="5">Dental</td>
        </tr>
        <td>OP-HP (Angle)</td>
            <td>6.2<sup>0</sup> ± 5.1<sup>0</sup></td>
            <td>7.1<sup>0</sup> ± 2.5<sup>0</sup></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>A-B (∥ OP)</td>
            <td>-1.1 ± 2.0</td>
            <td>-0.4 ± 2.5</td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
        <td>U1 NF (Angle)</td>
            <td>111.0<sup>0</sup> ± 4.7<sup>0</sup></td>
            <td>112.5<sup>0</sup> ± 5.3<sup>0</sup></td>
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
</div><?php /**PATH C:\Users\VeerIt\Downloads\one_scan\resources\views/admin/tabs/burstone_hard.blade.php ENDPATH**/ ?>
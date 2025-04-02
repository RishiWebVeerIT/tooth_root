<div class="card" style="padding: 20px;">
  <div class="card-body">

    <!-- Floating Labels Form -->
    <form class="row g-3" method='post' action="#" enctype="multipart/form-data">
      <?php echo csrf_field(); ?>
      <input type="hidden" class="form-control" name="id" id="floatingcity" value="<?php echo e($id); ?>">
      <h5 class="card-title text-center">Model Analysis</h5>
      <h5 class="card-title">Tooth Measurements</h5>
      <table class="table table-bordered text-center">
    <thead>
        <tr>
            <th></th>
            <th>Right</th>
            <th>Left</th>
            <th>Right</th>
            <th>Left</th>
        </tr>
        <tr>
            <th></th>
            <th colspan="2">Upper</th>
            <th colspan="2">Lower</th>
        </tr>
    </thead>
    <tbody>
        <?php for($i = 1;$i <= 6; $i++): ?>
    <tr>
            <td><?php echo e($i); ?></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <?php endfor; ?>
        <tr>
        <tr>
            <td>12TTM</td>
            <td colspan="2"><input type="text" class="form-control"></td>
            <td colspan="2"><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>SOI</td>
            <td colspan="2"><input type="text" class="form-control"></td>
            <td colspan="2"><input type="text" class="form-control"></td>
        </tr>
    </tbody>
</table>
      <div class="text-center">

        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-secondary">Reset</button>

      </div>
    </form><!-- End floating Labels Form -->

  </div>
</div><?php /**PATH C:\Users\VeerIt\Downloads\one_scan\resources\views/admin/tabs/model_analysis.blade.php ENDPATH**/ ?>
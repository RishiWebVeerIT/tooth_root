<div class="card" style="padding: 20px;">
  <div class="card-body">

    <!-- Floating Labels Form -->
    <form class="row g-3" method='post' action="#" enctype="multipart/form-data">
      @csrf
      <input type="hidden" class="form-control" name="id" id="floatingcity" value="{{$id}}">
      <h5 class="card-title text-center">Careys/Arch Perimeter Analysis</h5>
      <?php $i=1; ?>
      <table class="table table-bordered text-center">
    <thead>
        <tr>
            <th></th>
            <th>Upper</th>
            <th>Lower</th>
        </tr>
    </thead>
    <tbody>
    <tr>
            <td>Tooth Material</td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Arch Perimeter</td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Difference</td>
            <td><input type="text" class="form-control"></td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Ashley - How Analysis :</td>
            <td colspan="2"><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Linder - Health Analysis :</td>>
            <td colspan="2"><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Other Analysis :</td>
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
</div>
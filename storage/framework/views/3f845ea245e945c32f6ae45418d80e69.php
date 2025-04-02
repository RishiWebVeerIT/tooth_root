<?php $__env->startSection('section'); ?>

    <div class="pagetitle">
      <h1><?php echo e($pageTitle); ?></h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
          <li class="breadcrumb-item active"><?php echo e($pageTitle); ?></li>
        </ol>
      </nav>
    </div>

    <div class="card">
            <div class="card-body" style="padding-top: 20px;">
              <!-- Floating Labels Form -->
              <form class="row g-3" id="patientForm" accept-charset="UTF-8">
                <?php echo csrf_field(); ?>
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" name='name' id="floatingname" placeholder="Patient Name">
                    <label for="floatingname">Patient Name</label>
                    <span id="name-error" class="text-danger errorMessage"></span>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-floating">
                    <input type="text" class="form-control" name="email" id="floatingemail" placeholder="Email">
                    <label for="floatingemail">Email</label>
                    <span id="email-error" class="text-danger errorMessage"></span>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingOccupation" name="father_occupation" placeholder="Occupation">
                    <label for="floatingOccupation">Occupation</label>
                    <span id="occupation-error" class="text-danger errorMessage"></span>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-floating mb-3">
                    <select class="form-select" id="floatingsex" name="sex" aria-label="Sex">
                        <option value="">Select Sex</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                    <label for="floatingsex">Sex</label>
                    <span id="sex-error" class="text-danger errorMessage"></span>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-floating">
                    <input type="date" class="form-control" name="dob" id="floatingdob" placeholder="Date of Birth">
                    <label for="floatingdob">D.O.B. (mm/dd/yyyy)</label>
                    <span id="dob-error" class="text-danger errorMessage"></span>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-floating">
                    <input type="text" class="form-control" name="age" id="floatingage" placeholder="Age">
                    <label for="floatingage">Age</label>
                    <span id="age-error" class="text-danger errorMessage"></span>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-floating">
                    <input type="text" class="form-control" name="origin" id="floatingorigin" placeholder="Ethnic Origin">
                    <label for="floatingorigin">Ethnic Origin</label>
                    <span id="origin-error" class="text-danger errorMessage"></span>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-floating">
                    <input type="text" class="form-control" name="religion" id="floatingreligion" placeholder="Religion">
                    <label for="floatingreligion">Religion</label>
                    <span id="religion-error" class="text-danger errorMessage"></span>
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="form-floating">
                    <input type="text" class="form-control" name="guardian" id="floatingguardian" placeholder="Father / Guardian Name">
                    <label for="floatingguardian">Father / Guardian Name</label>
                    <span id="guardian-error" class="text-danger errorMessage"></span>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-floating">
                    <input type="text" class="form-control" name="mobile" id="floatingmobile" placeholder="Contact No.">
                    <label for="floatingmobile">Tel No./Mobile No.</label>
                    <span id="mobile-error" class="text-danger errorMessage"></span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" name="ortho_no" id="floatingortho_no" placeholder="Ortho No.">
                    <label for="floatingortho_no">Ortho No.</label>
                    <span id="ortho_no-error" class="text-danger errorMessage"></span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" name="op_no" id="floatingop_no" placeholder="O.P. No.">
                    <label for="floatingop_no">O.P No.</label>
                    <span id="op_no-error" class="text-danger errorMessage"></span>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Address" name="address" id="floatingaddress" style="height: 100px;"></textarea>
                    <label for="floatingaddress">Address</label>
                    <span id="address-error" class="text-danger errorMessage"></span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="col-md-12">
                    <div class="form-floating">
                      <input type="text" class="form-control" name="city" id="floatingcity" placeholder="City">
                      <label for="floatingcity">City</label>
                      <span id="city-error" class="text-danger errorMessage"></span>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-floating mb-3">
                    <select class="form-select" id="floatingstate" name="state" aria-label="State">
                        <option value="">Select state</option>
                        <option value="AN">Andaman and Nicobar Islands</option>
                        <option value="AP">Andhra Pradesh</option>
                        <option value="AR">Arunachal Pradesh</option>
                        <option value="AS">Assam</option>
                        <option value="BR">Bihar</option>
                        <option value="CH">Chandigarh</option>
                        <option value="CT">Chhattisgarh</option>
                        <option value="DN">Dadra and Nagar Haveli</option>
                        <option value="DD">Daman and Diu</option>
                        <option value="DL">Delhi</option>
                        <option value="GA">Goa</option>
                        <option value="GJ">Gujarat</option>
                        <option value="HR">Haryana</option>
                        <option value="HP">Himachal Pradesh</option>
                        <option value="JK">Jammu and Kashmir</option>
                        <option value="JH">Jharkhand</option>
                        <option value="KA">Karnataka</option>
                        <option value="KL">Kerala</option>
                        <option value="LA">Ladakh</option>
                        <option value="LD">Lakshadweep</option>
                        <option value="MP">Madhya Pradesh</option>
                        <option value="MH" selected>Maharashtra</option>
                        <option value="MN">Manipur</option>
                        <option value="ML">Meghalaya</option>
                        <option value="MZ">Mizoram</option>
                        <option value="NL">Nagaland</option>
                        <option value="OR">Odisha</option>
                        <option value="PY">Puducherry</option>
                        <option value="PB">Punjab</option>
                        <option value="RJ">Rajasthan</option>
                        <option value="SK">Sikkim</option>
                        <option value="TN">Tamil Nadu</option>
                        <option value="TG">Telangana</option>
                        <option value="TR">Tripura</option>
                        <option value="UP">Uttar Pradesh</option>
                        <option value="UT">Uttarakhand</option>
                        <option value="WB">West Bengal</option>
                    </select>
                    <label for="floatingstate">State</label>
                    <span id="state-error" class="text-danger errorMessage"></span>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-floating">
                    <input type="text" class="form-control" name="zip" id="floatingzip" placeholder="Zip">
                    <label for="floatingzip">Zip</label>
                    <span id="zip-error" class="text-danger errorMessage"></span>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End floating Labels Form -->

            </div>
          </div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
<script>

$('#floatingdob').on('input',function(){
      let mdate = $("#floatingdob").val().toString();
      console.log()
      let yearThen = parseInt(mdate.substring(0,4), 10);
      let monthThen = parseInt(mdate.substring(5,7), 10);
      let dayThen = parseInt(mdate.substring(8,10), 10);
        
      let today = new Date();
      let birthday = new Date(yearThen, monthThen-1, dayThen);
        
      let differenceInMilisecond = today.valueOf() - birthday.valueOf();
        
      let year_age = Math.floor(differenceInMilisecond / 31536000000);
      let day_age = Math.floor((differenceInMilisecond % 31536000000) / 86400000);
        
        if ((today.getMonth() == birthday.getMonth()) && (today.getDate() == birthday.getDate())) {
            alert("Happy B'day!!!");
        }
        
      let month_age = Math.floor(day_age/30);
        
        day_age = day_age % 30;
        
        if (isNaN(year_age) || year_age < 0) {
            $("#floatingage").val("Invalid DOB");
        }
        else {
            $("#floatingage").val(year_age);
        }
    });

    $('#patientForm').on('submit',function(e){
        e.preventDefault();

        let name = $('#floatingname').val();
        let age = $('#floatingage').val();
        let dob = $('#floatingdob').val();
        let ortho_no = $('#floatingortho_no').val();
        let op_no = $('#floatingop_no').val();
        let sex = $('#floatingsex').val();
        let origin = $('#floatingorigin').val();
        let religion = $('#floatingreligion').val();
        let mobile = $('#floatingmobile').val();
        let father_occupation = $('#floatingOccupation').val();
        let guardian = $('#floatingguardian').val();
        let email = $('#floatingemail').val();
        let address = $('#floatingaddress').val();
        let city = $('#floatingcity').val();
        let state = $('#floatingstate').val();
        let zip = $('#floatingzip').val();

        $.ajax({
          url: "<?php echo route('admin.create_patient'); ?>",
          type:"POST",
          data:{
            "_token": "<?php echo e(csrf_token()); ?>",
            name:name,
            age:age,
            dob:dob,
            ortho_no:ortho_no,
            op_no:op_no,
            sex:sex,
            origin:origin,
            religion:religion,
            mobile:mobile,
            father_occupation:father_occupation,
            guardian:guardian,
            email:email,
            address:address,
            city:city,
            state:state,
            zip:zip,
          },
          beforeSend:function(){
            $('.errorMessage').html('');
          },
          success:function(response){
            $('.errorMessage').html('');
            console.log(response);
            if (response) {
              $('#success-message').text(response.success);
              toastr.options = {
                  'progressBar' : true,
                  'closeButton' : true,
                }
                toastr.success(response.success,'Success!',{timeOut: 1200});
                          $("#patientForm")[0].reset(); 
              }
          },
          error:function(response){

            console.log(response);
            $('#name-error').text(response.responseJSON.errors.name);
            $('#age-error').text(response.responseJSON.errors.age);
            $('#dob-error').text(response.responseJSON.errors.dob);
            $('#ortho_no-error').text(response.responseJSON.errors.ortho_no);
            $('#op_no-error').text(response.responseJSON.errors.op_no);
            $('#sex-error').text(response.responseJSON.errors.sex);
            $('#origin-error').text(response.responseJSON.errors.origin);
            $('#religion-error').text(response.responseJSON.errors.religion);
            $('#mobile-error').text(response.responseJSON.errors.mobile);
            $('#occupation-error').text(response.responseJSON.errors.father_occupation);
            $('#guardian-error').text(response.responseJSON.errors.guardian);
            $('#email-error').text(response.responseJSON.errors.email);
            $('#address-error').text(response.responseJSON.errors.address);
            $('#city-error').text(response.responseJSON.errors.city);
            $('#state-error').text(response.responseJSON.errors.state);
            $('#zip-error').text(response.responseJSON.errors.zip);
           }
         });
        });

</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('Layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ToothRoot\tooth_root\resources\views/admin/addPatient.blade.php ENDPATH**/ ?>
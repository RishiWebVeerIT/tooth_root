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
              <span class="text-danger">( <b> Note</b> : Email-ID will be as <b>Username</b> and Mobile no. will be as <b>Password</b> for User Login, Please fill this fields carefully )</span>
              <br><br>
              <form class="row g-3" method="post" id="patientForm" enctype="multipart/form-data">
                <?php echo csrf_field(); ?> 
                <input type="hidden" name="id" value="<?php echo e($patient->id); ?>" id="floatingid">

                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" name='name' value="<?php echo e($patient->name); ?>" id="floatingname" placeholder="Patient Name">
                    <label for="floatingname">Patient Name</label>
                    <span id="name-error" class="text-danger errorMessage"></span>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-floating">
                    <input type="text" class="form-control" name="email" value="<?php echo e($patient->email); ?>" id="floatingemail" placeholder="Email">
                    <label for="floatingemail">Email</label>
                    <span id="email-error" class="text-danger errorMessage"></span>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingOccupation" name="father_occupation" value="<?php echo e($patient->father_occupation); ?>" placeholder="Occupation">
                    <label for="floatingOccupation">Occupation</label>
                    <span id="occupation-error" class="text-danger errorMessage"></span>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-floating mb-3">
                    <select class="form-select" id="floatingsex" name="sex" aria-label="Sex">
                        <option value="">Select Sex</option>
                        <option value="male" <?php if($patient->sex == "male"): ?> selected <?php endif; ?>>Male</option>
                        <option value="female" <?php if($patient->sex == "female"): ?> selected <?php endif; ?>>Female</option>
                        <option value="other" <?php if($patient->sex == "other"): ?> selected <?php endif; ?>>Other</option>
                    </select>
                    <label for="floatingsex">Sex</label>
                    <span id="sex-error" class="text-danger errorMessage"></span>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-floating">
                    <input type="date" class="form-control" name="dob" value="<?php echo e($patient->dob); ?>" id="floatingdob" placeholder="Date of Birth">
                    <label for="floatingdob">D.O.B. (mm/dd/yyyy)</label>
                    <span id="dob-error" class="text-danger errorMessage"></span>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-floating">
                    <input type="text" class="form-control" name="age" value="<?php echo e($patient->age); ?>" id="floatingage" placeholder="Age">
                    <label for="floatingage">Age</label>
                    <span id="age-error" class="text-danger errorMessage"></span>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-floating">
                    <input type="text" class="form-control" name="origin" value="<?php echo e($patient->origin); ?>" id="floatingorigin" placeholder="Ethnic Origin">
                    <label for="floatingorigin">Ethnic Origin</label>
                    <span id="origin-error" class="text-danger errorMessage"></span>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-floating">
                    <input type="text" class="form-control" name="religion" value="<?php echo e($patient->religion); ?>" id="floatingreligion" placeholder="Religion">
                    <label for="floatingreligion">Religion</label>
                    <span id="religion-error" class="text-danger errorMessage"></span>
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="form-floating">
                    <input type="text" class="form-control" name="guardian" value="<?php echo e($patient->guardian); ?>" id="floatingguardian" placeholder="Father / Guardian Name">
                    <label for="floatingguardian">Father / Guardian Name</label>
                    <span id="guardian-error" class="text-danger errorMessage"></span>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-floating">
                    <input type="text" class="form-control" name="mobile" value="<?php echo e($patient->mobile); ?>" id="floatingmobile" placeholder="Contact No.">
                    <label for="floatingmobile">Tel No./Mobile No.</label>
                    <span id="mobile-error" class="text-danger errorMessage"></span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" name="ortho_no" id="floatingortho_no" value="<?php echo e($patient->ortho_no); ?>" placeholder="Ortho No.">
                    <label for="floatingortho_no">Ortho No.</label>
                    <span id="ortho_no-error" class="text-danger errorMessage"></span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" name="op_no" id="floatingop_no" value="<?php echo e($patient->op_no); ?>"  placeholder="O.P. No.">
                    <label for="floatingop_no">O.P No.</label>
                    <span id="op_no-error" class="text-danger errorMessage"></span>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Address" name="address" id="floatingaddress" style="height: 100px;"><?php echo e($patient->address); ?></textarea>
                    <label for="floatingaddress">Address</label>
                    <span id="address-error" class="text-danger errorMessage"></span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="col-md-12">
                    <div class="form-floating">
                      <input type="text" class="form-control" name="city" value="<?php echo e($patient->city); ?>" id="floatingcity" placeholder="City">
                      <label for="floatingcity">City</label>
                      <span id="city-error" class="text-danger errorMessage"></span>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-floating mb-3">
                    <select class="form-select" id="floatingstate" name="state" aria-label="State">
                        <option value="">Select State</option>
                        <option value="AN" <?php if($patient->state == "AN"): ?> selected <?php endif; ?> >Andaman and Nicobar Islands</option>
                        <option value="AP" <?php if($patient->state == "AP"): ?> selected <?php endif; ?> >Andhra Pradesh</option>
                        <option value="AR" <?php if($patient->state == "AR"): ?> selected <?php endif; ?> >Arunachal Pradesh</option>
                        <option value="AS" <?php if($patient->state == "AS"): ?> selected <?php endif; ?> >Assam</option>
                        <option value="BR" <?php if($patient->state == "BR"): ?> selected <?php endif; ?> >Bihar</option>
                        <option value="CH" <?php if($patient->state == "CH"): ?> selected <?php endif; ?> >Chandigarh</option>
                        <option value="CT" <?php if($patient->state == "CT"): ?> selected <?php endif; ?> >Chhattisgarh</option>
                        <option value="DN" <?php if($patient->state == "DN"): ?> selected <?php endif; ?> >Dadra and Nagar Haveli</option>
                        <option value="DD" <?php if($patient->state == "DD"): ?> selected <?php endif; ?> >Daman and Diu</option>
                        <option value="DL" <?php if($patient->state == "DL"): ?> selected <?php endif; ?> >Delhi</option>
                        <option value="GA" <?php if($patient->state == "GA"): ?> selected <?php endif; ?> >Goa</option>
                        <option value="GJ" <?php if($patient->state == "GJ"): ?> selected <?php endif; ?> >Gujarat</option>
                        <option value="HR" <?php if($patient->state == "HR"): ?> selected <?php endif; ?> >Haryana</option>
                        <option value="HP" <?php if($patient->state == "HP"): ?> selected <?php endif; ?> >Himachal Pradesh</option>
                        <option value="JK" <?php if($patient->state == "JK"): ?> selected <?php endif; ?> >Jammu and Kashmir</option>
                        <option value="JH" <?php if($patient->state == "JH"): ?> selected <?php endif; ?> >Jharkhand</option>
                        <option value="KA" <?php if($patient->state == "KA"): ?> selected <?php endif; ?> >Karnataka</option>
                        <option value="KL" <?php if($patient->state == "KL"): ?> selected <?php endif; ?> >Kerala</option>
                        <option value="LA" <?php if($patient->state == "LA"): ?> selected <?php endif; ?> >Ladakh</option>
                        <option value="LD" <?php if($patient->state == "LD"): ?> selected <?php endif; ?> >Lakshadweep</option>
                        <option value="MP" <?php if($patient->state == "MP"): ?> selected <?php endif; ?> >Madhya Pradesh</option>
                        <option value="MH" <?php if($patient->state == "MH"): ?> selected <?php endif; ?>  >Maharashtra</option>
                        <option value="MN" <?php if($patient->state == "MN"): ?> selected <?php endif; ?> >Manipur</option>
                        <option value="ML" <?php if($patient->state == "ML"): ?> selected <?php endif; ?> >Meghalaya</option>
                        <option value="MZ" <?php if($patient->state == "MZ"): ?> selected <?php endif; ?> >Mizoram</option>
                        <option value="NL" <?php if($patient->state == "NL"): ?> selected <?php endif; ?> >Nagaland</option>
                        <option value="OR" <?php if($patient->state == "OR"): ?> selected <?php endif; ?> >Odisha</option>
                        <option value="PY" <?php if($patient->state == "PY"): ?> selected <?php endif; ?> >Puducherry</option>
                        <option value="PB" <?php if($patient->state == "PB"): ?> selected <?php endif; ?> >Punjab</option>
                        <option value="RJ" <?php if($patient->state == "RJ"): ?> selected <?php endif; ?> >Rajasthan</option>
                        <option value="SK" <?php if($patient->state == "SK"): ?> selected <?php endif; ?> >Sikkim</option>
                        <option value="TN" <?php if($patient->state == "TN"): ?> selected <?php endif; ?> >Tamil Nadu</option>
                        <option value="TG" <?php if($patient->state == "TG"): ?> selected <?php endif; ?> >Telangana</option>
                        <option value="TR" <?php if($patient->state == "TR"): ?> selected <?php endif; ?> >Tripura</option>
                        <option value="UP" <?php if($patient->state == "UP"): ?> selected <?php endif; ?> >Uttar Pradesh</option>
                        <option value="UT" <?php if($patient->state == "UT"): ?> selected <?php endif; ?> >Uttarakhand</option>
                        <option value="WB" <?php if($patient->state == "WB"): ?> selected <?php endif; ?> >West Bengal</option>
                    </select>
                    <label for="floatingstate">State</label>
                    <span id="state-error" class="text-danger errorMessage"></span>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-floating">
                    <input type="text" class="form-control" name="zip" value="<?php echo e($patient->zip); ?>" id="floatingzip" placeholder="Zip">
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

        let id = $('#floatingid').val();
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
          url: "<?php echo route('admin.edit_patient'); ?>",
          type:"POST",
          data:{
            "_token": "<?php echo e(csrf_token()); ?>",
            id:id,
            name:name,
            age:age,
            dob:dob,
            sex:sex,
            origin:origin,
            ortho_no:ortho_no,
            op_no:op_no,
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
                toastr.success(response.success,'Success!',{timeOut: 2000});

              }
          },
          error:function(response){

            console.log(response);
            $('#name-error').text(response.responseJSON.errors.name);
            $('#age-error').text(response.responseJSON.errors.age);
            $('#dob-error').text(response.responseJSON.errors.dob);
            $('#sex-error').text(response.responseJSON.errors.sex);
            $('#ortho_no-error').text(response.responseJSON.errors.ortho_no);
            $('#op_no-error').text(response.responseJSON.errors.op_no);
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
<?php echo $__env->make('Layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\OneScan\one_scan\resources\views/admin/editPatient.blade.php ENDPATH**/ ?>
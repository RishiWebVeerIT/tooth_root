                    <!-- Vertical Form -->
            <form class="row g-3" method="post" action="<?php echo e(route('admin.add_images')); ?>" enctype="multipart/form-data">
              <?php echo csrf_field(); ?>
            <input type="hidden" class="form-control" name="id" id="floatingcity" value="<?php echo e($id); ?>">

                <div class="col-12">
                  <label for="select1" class="form-label">Select Title</label>
                  <select class="form-select" name="tittle" id="select1" aria-label="Default select example" required>
                      <option selected>Open this select menu</option>
                      <option value="pre">Pre-Treatment</option>
                      <option value="mid">Mid-Treatment</option>
                      <option value="post">Post-Treatment</option>
                </select>
                </div>

                <div class="col-12">
                  <label for="select2" class="form-label">Your Sub Title</label>
                  <select class="form-select" name="sub_tittle"  id="select2" aria-label="Default select example" required>
                      <option selected>Open this select menu</option>
                      <option value="photograph">Treatment photograph </option>
                      <option value="radiograph">Treatment Radiograph</option>
                      <option value="study">Study Model</option>
                </select>
                </div>

                <div class="col-12">
                  <label for="select3" class="form-label">Child Title</label>
                  <select class="form-select" name="child_tittle"  id="select3" aria-label="Default select example">
                      <option selected>Open this select menu</option>
                      <option value="external">External photo</option>
                      <option value="internal">Internal photo</option>
                      <option value="lap">Lap cap</option>
                      <option value="opg">OPG</option>
                      <option value="NA">None</option>
                </select>
                </div>

                <div class="upload__box col-12">
                <div class="upload__btn-box">
                <label class="upload__btn">
                <label for="select3" class="form-label">Select Multiple Images</label><span class="text-danger"> ( Image Size must be lessthan 2MB/Img )</span>
                <br>
                    <input  name="images[]" id="formFile" type="file" multiple data-max_length="20" accept="image/*"  class="upload__inputfile form-control">
                </label>
                </div>
                <br><br>
                <div class="upload__img-wrap"></div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- Vertical Form -->
              <?php if(count($images)): ?>
              <br><br>
             <hr>
              <br>
              <?php endif; ?>
          <?php
          $sub_t = array('pre','mid','post');
          ?>

                <?php for($i = 0; $i < count($sub_t); $i++): ?>

                <?php if($sub_t[$i] == 'pre' && in_array('pre', $img_title) ): ?>
                <h5 class="imgtitle">Pre-Treatment</h5>
                <?php $title = 'Pre-Treatment'; ?>
                <?php elseif($sub_t[$i] == 'mid' && in_array('mid', $img_title)): ?>
                <h5 class="imgtitle">Mid-Treatment</h5>
                <?php $title = 'Mid-Treatment'; ?>
                <?php elseif($sub_t[$i] == 'post' && in_array('post', $img_title)): ?>
                <h5 class="imgtitle">Post-Treatment</h5>
                <?php $title = 'Post-Treatment'; ?>
                <?php endif; ?>

                <?php if(in_array($sub_t[$i], $img_title) && in_array('photograph', $sub_title) && in_array('external', $child_title)): ?>
                <h5 class="card-title" style="margin-left: 50px;"><?php echo e(ucfirst($sub_t[$i])); ?>-Treatment Photograph - External </h5>
                <?php endif; ?>

                <?php $__empty_1 = true; $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php if($image->tittle == $sub_t[$i]  && $image->sub_title == 'photograph' && $image->child_title == 'external'): ?>
                        <img src="<?php echo e(asset('uploads/'.$image->url)); ?>" style="width: 200px"/>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <?php endif; ?>

                <?php if(in_array($sub_t[$i], $img_title) && in_array('photograph', $sub_title) && in_array('internal', $child_title)): ?>
                <h5 class="card-title" style="margin-left: 50px;"><?php echo e(ucfirst($sub_t[$i])); ?>-Treatment Photograph - Internal </h5>
                <?php endif; ?>
             <?php $__empty_1 = true; $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php if($image->tittle == $sub_t[$i]  && $image->sub_title == 'photograph' && $image->child_title == 'internal'): ?>

                        <img src="<?php echo e(asset('uploads/'.$image->url)); ?>" style="width: 200px"/>

                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
             <?php endif; ?>

             <?php if(in_array($sub_t[$i], $img_title) && in_array('radiograph', $sub_title) && in_array('lap', $child_title)): ?>
             <h5 class="card-title" style="margin-left: 50px;"><?php echo e(ucfirst($sub_t[$i])); ?>-Treatment Radiograph - Lap </h5>
             <?php endif; ?>

             <?php $__empty_1 = true; $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php if($image->tittle == $sub_t[$i]  && $image->sub_title == 'radiograph' && $image->child_title == 'lap'): ?>

                        <img src="<?php echo e(asset('uploads/'.$image->url)); ?>" style="width: 200px"/>

                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
             <?php endif; ?>

             <?php if(in_array($sub_t[$i], $img_title) && in_array('radiograph', $sub_title) && in_array('opg', $child_title)): ?>
             <h5 class="card-title" style="margin-left: 50px;"><?php echo e(ucfirst($sub_t[$i])); ?>-Treatment Radiograph - OPG</h5>
             <?php endif; ?>

             <?php $__empty_1 = true; $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php if($image->tittle == $sub_t[$i]  && $image->sub_title == 'radiograph' && $image->child_title == 'opg'): ?>

                        <img src="<?php echo e(asset('uploads/'.$image->url)); ?>" style="width: 200px"/>

                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
             <?php endif; ?>

             <?php if(in_array($sub_t[$i], $img_title) && in_array('study', $sub_title) && in_array('NA', $child_title)): ?>
             <h5 class="card-title" style="margin-left: 50px;">Study Model</h5>
             <?php endif; ?>

             <?php $__empty_1 = true; $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php if($image->tittle == $sub_t[$i]  && $image->sub_title == 'study' && $image->child_title == 'NA'): ?>

                      <img src="<?php echo e(asset('uploads/'.$image->url)); ?>" style="width: 200px"/>

                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
             <?php endif; ?>
                <?php endfor; ?>



<?php $__env->startPush('script'); ?>
<script>
jQuery(document).ready(function () {
  ImgUpload();
});

function ImgUpload() {
  var imgWrap = "";
  var imgArray = [];

  $('.upload__inputfile').each(function () {
    $(this).on('change', function (e) {
      imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
      var maxLength = $(this).attr('data-max_length');

      var files = e.target.files;
      var filesArr = Array.prototype.slice.call(files);
      var iterator = 0;
      filesArr.forEach(function (f, index) {

        if (!f.type.match('image.*')) {
          return;
        }

        if (imgArray.length > maxLength) {
          return false
        } else {
          var len = 0;
          for (var i = 0; i < imgArray.length; i++) {
            if (imgArray[i] !== undefined) {
              len++;
            }
          }
          if (len > maxLength) {
            return false;
          } else {
            imgArray.push(f);

            var reader = new FileReader();
            reader.onload = function (e) {
              var html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
              imgWrap.append(html);
              iterator++;
            }
            reader.readAsDataURL(f);
          }
        }
      });
    });
  });

  $('body').on('click', ".upload__img-close", function (e) {
    var file = $(this).parent().data("file");
    for (var i = 0; i < imgArray.length; i++) {
      if (imgArray[i].name === file) {
        imgArray.splice(i, 1);
        break;
      }
    }
    $(this).parent().parent().remove();
  });
}
</script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('style'); ?>
<style>

.imgtitle{
    padding: 20px 0 15px 0;
    font-size: 26px;
    font-weight: 500;
    color: #012970;
    font-family: "Poppins", sans-serif;
}

 .upload__img-wrap {
	 display: flex;
	 flex-wrap: wrap;
	 margin: 0 -10px;
}
 .upload__img-box {
	 width: 200px;
	 padding: 0 10px;
	 margin-bottom: 12px;
}
 .upload__img-close {
	 width: 24px;
	 height: 24px;
	 border-radius: 50%;
	 background-color: rgba(0, 0, 0, 0.5);
	 position: absolute;
	 top: 10px;
	 right: 10px;
	 text-align: center;
	 line-height: 24px;
	 z-index: 1;
	 cursor: pointer;
}
 .upload__img-close:after {
	 content: '\2716';
	 font-size: 14px;
	 color: white;
}
 .img-bg {
	 background-repeat: no-repeat;
	 background-position: center;
	 background-size: cover;
	 position: relative;
	 padding-bottom: 100%;
}

</style>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\xampp\htdocs\one_scan\resources\views/admin/addimage.blade.php ENDPATH**/ ?>
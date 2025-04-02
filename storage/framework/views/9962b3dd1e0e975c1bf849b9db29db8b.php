<div class="card" style="padding: 40px;">
            <div class="card-body">
    
              <!-- Floating Labels Form -->
              <form class="row g-3" method='post' action="<?php echo e(route('admin.add_history_detail')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <input type="hidden" class="form-control" name="id" id="floatingcity" value="<?php echo e($id); ?>">
              <h5 class="card-title">1. Chief Complaint</h5>
              <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Chief Complaint" name="chief_complaint" id="floatingChief" style="height: 100px;"><?php if($history): ?><?php echo e($history->chief_complaint); ?><?php endif; ?></textarea>
                    <label for="floatingChief">Chief Complaint</label>
                  </div>
                </div>
                <br><br>

              <h5 class="card-title">2. Pre-Natal History</h5>
              <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Informer" name="informer" id="floatingInformer" style="height: 100px;"><?php if($history): ?><?php echo e($history->informer); ?><?php endif; ?></textarea>
                    <label for="floatingInformer">Informer</label>
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Condition of Mother during Pregnancy" name="cond_mother_dur_pregnacy" id="floating_mother_pregnancy" style="height: 100px;"><?php if($history): ?><?php echo e($history->cond_mother_dur_pregnacy); ?><?php endif; ?></textarea>
                    <label for="floating_mother_pregnancy">Condition of Mother during Pregnancy</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelect" name="delivery_type" aria-label="Type of Delivery">
                      <option selected>select</option>
                      <option value="Normal">Normal</option>
                      <option value="Scissor">Scissor</option>
                    </select>
                    <label for="floatingSelect">Type of Delivery</label>
                  </div>
                </div>

                <br><br>
                <h5 class="card-title">3. Post-Natal History</h5>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Feeding" name="feeding" id="floatingFeeding" style="height: 100px;"><?php if($history): ?><?php echo e($history->feeding); ?><?php endif; ?></textarea>
                    <label for="floatingFeeding">Feeding</label>
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Duration and Frequencyh of Bottle" name="dur_freq_of_bottle" id="floatingdur_freq_of_bottle" style="height: 100px;"><?php if($history): ?><?php echo e($history->dur_freq_of_bottle); ?><?php endif; ?></textarea>
                    <label for="floatingdur_freq_of_bottle">Duration and Frequencyh of Bottle</label>
                  </div>
                </div>

                <br><br>
                <h5 class="card-title">4. Milestone of Development</h5>

  
                <div class="col-6">
                  <div class="form-floating mb-3">
                    <select class="form-select" id="deve_milestoneSelect" name="deve_milestone" aria-label="Type of Delivery">
                      <option selected>select</option>
                      <option value="Crawling">Crawling</option>
                      <option value="Walking">Walking</option>
                      <option value="Speech">Speech</option>
                      <option value="First Tooth Appearance">First Tooth Appearance</option>
                    </select>
                    <label for="deve_milestoneSelect">Milestone of Development</label>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-floating">
                    <input type="text" class="form-control"  name="deve_milestone_age" id="floatingdeve_milestone_age" placeholder="Zip">
                    <label for="floatingdeve_milestone_age">Milestone Age</label>
                  </div>
                </div>

                <br><br>
                <h5 class="card-title">4. Childhood Diseases</h5>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Childhood Diseases" name="childhood_diseases" id="floatingchildhood_diseases" style="height: 100px;"><?php if($history): ?><?php echo e($history->childhood_diseases); ?><?php endif; ?></textarea>
                    <label for="floatingchildhood_diseases">Childhood Diseases</label>
                  </div>
                </div>

                <br><br>
                <h5 class="card-title">5. Habits</h5>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Habits" name="habits" id="floatinghabits" style="height: 100px;"><?php if($history): ?><?php echo e($history->habits); ?><?php endif; ?></textarea>
                    <label for="floatinghabits">Habits</label>
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Up Age" name="up_age" id="floatingup_age" style="height: 100px;"><?php if($history): ?><?php echo e($history->up_age); ?><?php endif; ?></textarea>
                    <label for="floatingup_age">Up Age</label>
                  </div>
                </div>

                <br><br>
                <h5 class="card-title">6. Injuries</h5>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Injuries" name="injuries" id="floatinginjuries" style="height: 100px;"><?php if($history): ?><?php echo e($history->injuries); ?><?php endif; ?></textarea>
                    <label for="floatinginjuries">Injuries</label>
                  </div>
                </div>
                
                <br><br>
                <h5 class="card-title">7. Familtal Malocclusion History</h5>
                <div class="col-3">
                  <div class="form-check">
                      <input class="form-check-input" value="1" name="Parent" type="checkbox" id="gridCheck2">
                      <label class="form-check-label" for="gridCheck2">
                      Parent
                      </label>
                    </div>
                </div>
                <div class="col-3">
                  <div class="form-check">
                      <input class="form-check-input" value="1" name="sibling" type="checkbox" id="gridCheck1">
                      <label class="form-check-label" for="gridCheck1">
                      Sibling
                      </label>
                    </div>
                </div>
               
                <div class="col-3">
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" name="Similar" id="gridCheck3">
                      <label class="form-check-label" for="gridCheck3">
                      Similar
                      </label>
                    </div>
                </div>
                <div class="col-3">
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" name="dissimilar" id="gridCheck4">
                      <label class="form-check-label" for="gridCheck4">
                      Dissimilar
                      </label>
                    </div>
                </div>
          
                <br><br>
                <h5 class="card-title">8. General History</h5>

                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Reasons for taking Orthodontic Treatment :" name="treatment_reason" id="floatingtreatment_reason" style="height: 100px;"><?php if($history): ?><?php echo e($history->treatment_reason); ?><?php endif; ?></textarea>
                    <label for="floatingtreatment_reason">Reasons for taking Orthodontic Treatment</label>
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Esthetics/Functional/Speech/Hygiene " name="functional_hygiene" id="floatingfunctional_hygiene" style="height: 100px;"><?php if($history): ?><?php echo e($history->functional_hygiene); ?><?php endif; ?></textarea>
                    <label for="floatingfunctional_hygiene">Esthetics/Functional/Speech/Hygiene </label>
                  </div>
                </div>

                <br><br>
                <h5 class="card-title">9. Past Dental History</h5>

                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Past Dental History" name="past_history" id="floatingpast_history" style="height: 100px;"><?php if($history): ?><?php echo e($history->past_history); ?><?php endif; ?></textarea>
                    <label for="floatingpast_history">Past Dental History</label>
                  </div>
                </div>

                <br><br>
                <h5 class="card-title">10. Pubertal Status</h5>

                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Pubertal Status" name="pubertal_status" id="floatingpubertal_status" style="height: 100px;"><?php if($history): ?><?php echo e($history->pubertal_status); ?><?php endif; ?></textarea>
                    <label for="floatingpubertal_status">Pubertal Status</label>
                  </div>
                </div>

                <br><br>
                <h5 class="card-title">11. Any Other Information</h5>

                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Any Other Information" name="other_info" id="floatingother_info" style="height: 100px;"><?php if($history): ?><?php echo e($history->other_info); ?><?php endif; ?></textarea>
                    <label for="floatingother_info">Any Other Information</label>
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End floating Labels Form -->

            </div>
          </div><?php /**PATH C:\xampp\htdocs\One_Scan\OneScan\one_scan\resources\views/admin/addHistoryDetail.blade.php ENDPATH**/ ?>
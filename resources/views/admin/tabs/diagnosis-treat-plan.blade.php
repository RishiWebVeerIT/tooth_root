<div class="card" style="padding: 20px;">
            <div class="card-body">
    
              <!-- Floating Labels Form -->
              <form class="row g-3" method='post' action="{{route('admin.add_history_detail')}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" class="form-control" name="id" id="floatingcity" value="{{$id}}">
              <h5 class="card-title">1. Chief Complaint</h5>
              <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Chief Complaint" name="chief_complaint" id="floatingChief" style="height: 100px;">@if($history){{$history->chief_complaint}}@endif</textarea>
                    <label for="floatingChief">Chief Complaint</label>
                  </div>
                </div>
                <br><br>

              <h5 class="card-title">2. Pre-Natal History</h5>
              <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Informer" name="informer" id="floatingInformer" style="height: 100px;">@if($history){{$history->informer}}@endif</textarea>
                    <label for="floatingInformer">Informer</label>
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Condition of Mother during Pregnancy" name="cond_mother_dur_pregnacy" id="floating_mother_pregnancy" style="height: 100px;">@if($history){{$history->cond_mother_dur_pregnacy}}@endif</textarea>
                    <label for="floating_mother_pregnancy">Condition of Mother during Pregnancy</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelect" name="delivery_type" aria-label="Type of Delivery">
                      <option selected>select</option>
                      <option value="Normal" @if($history) @if($history->delivery_type == 'Normal') Selected @endif @endif>Normal</option>
                      <option value="Scissor" @if($history) @if($history->delivery_type == 'Scissor') Selected @endif @endif>Scissor</option>
                    </select>
                    <label for="floatingSelect">Type of Delivery</label>
                  </div>
                </div>

                <br><br>
                <h5 class="card-title">3. Post-Natal History</h5>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Feeding" name="feeding" id="floatingFeeding" style="height: 100px;">@if($history){{$history->feeding}}@endif</textarea>
                    <label for="floatingFeeding">Feeding</label>
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Duration and Frequencyh of Bottle" name="dur_freq_of_bottle" id="floatingdur_freq_of_bottle" style="height: 100px;">@if($history){{$history->dur_freq_of_bottle}}@endif</textarea>
                    <label for="floatingdur_freq_of_bottle">Duration and Frequencyh of Bottle</label>
                  </div>
                </div>

                <br><br>
                <h5 class="card-title">4. Milestone of Development</h5>

  
                <div class="col-6">
                  <div class="form-floating mb-3">
                    <select class="form-select" id="deve_milestoneSelect" name="deve_milestone" aria-label="Type of Delivery">
                      <option selected>select</option>
                      <option value="Crawling" @if($history) @if($history->deve_milestone == 'Crawling') Selected @endif @endif>Crawling</option>
                      <option value="Walking" @if($history) @if($history->deve_milestone == 'Walking') Selected @endif @endif>Walking</option>
                      <option value="Speech" @if($history) @if($history->deve_milestone == 'Speech') Selected @endif @endif>Speech</option>
                      <option value="First Tooth Appearance" @if($history) @if($history->deve_milestone == 'First Tooth Appearance') Selected @endif @endif>First Tooth Appearance</option>
                    </select>
                    <label for="deve_milestoneSelect">Milestone of Development</label>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-floating">
                    <input type="text" class="form-control"  name="deve_milestone_age" id="floatingdeve_milestone_age" placeholder="Age" @if($history) value="{{$history->deve_milestone_age}}" @endif>
                    <label for="floatingdeve_milestone_age">Milestone Age</label>
                  </div>
                </div>

                <br><br>
                <h5 class="card-title">5. Childhood Diseases</h5>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Childhood Diseases" name="childhood_diseases" id="floatingchildhood_diseases" style="height: 100px;">@if($history){{$history->childhood_diseases}}@endif</textarea>
                    <label for="floatingchildhood_diseases">Childhood Diseases</label>
                  </div>
                </div>

                <br><br>
                <h5 class="card-title">6. Habits</h5>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Habits" name="habits" id="floatinghabits" style="height: 100px;">@if($history){{$history->habits}}@endif</textarea>
                    <label for="floatinghabits">Habits</label>
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Up Age" name="up_age" id="floatingup_age" style="height: 100px;">@if($history){{$history->up_age}}@endif</textarea>
                    <label for="floatingup_age">Up Age</label>
                  </div>
                </div>

                <br><br>
                <h5 class="card-title">7. Injuries</h5>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Injuries" name="injuries" id="floatinginjuries" style="height: 100px;">@if($history){{$history->injuries}}@endif</textarea>
                    <label for="floatinginjuries">Injuries</label>
                  </div>
                </div>
                
                <br><br>
                <h5 class="card-title">8. Familtal Malocclusion History</h5>
                <div class="col-3">
                  <div class="form-check">
                      <input class="form-check-input" value="1" name="Parent" type="checkbox" id="gridCheck2" @if($history) @if($history->Parent) checked @endif @endif>
                      <label class="form-check-label" for="gridCheck2">
                      Parent
                      </label>
                    </div>
                </div>
                <div class="col-3">
                  <div class="form-check">
                      <input class="form-check-input" value="1" name="sibling" type="checkbox" id="gridCheck1" @if($history) @if($history->sibling) checked @endif @endif>
                      <label class="form-check-label" for="gridCheck1">
                      Sibling
                      </label>
                    </div>
                </div>
               
                <div class="col-3">
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" name="Similar" id="gridCheck3" @if($history) @if($history->Similar) checked @endif @endif>
                      <label class="form-check-label" for="gridCheck3">
                      Similar
                      </label>
                    </div>
                </div>
                <div class="col-3">
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" name="dissimilar" id="gridCheck4" @if($history) @if($history->dissimilar) checked @endif @endif>
                      <label class="form-check-label" for="gridCheck4">
                      Dissimilar
                      </label>
                    </div>
                </div>
          
                <br><br>
                <h5 class="card-title">9. General History</h5>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Injuries" name="general_history" id="floatinggeneral_history" style="height: 100px;">@if($history){{$history->general_history}}@endif</textarea>
                    <label for="floatinggeneral_history">General History</label>
                  </div>
                </div>
                <h6 class="card-title">10. Reasons for taking Orthodontic Treatment</h6>
                <div class="col-3">
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" name="esthetics" id="gridCheck5" @if($history) @if($history->esthetics) checked @endif @endif>
                      <label class="form-check-label" for="gridCheck5">
                      Esthetics
                      </label>
                    </div>
                </div>
                <div class="col-3">
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" name="functional" id="gridCheck6" @if($history) @if($history->functional) checked @endif @endif>
                      <label class="form-check-label" for="gridCheck6">
                      Functional
                      </label>
                    </div>
                </div>
                <div class="col-3">
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" name="speech" id="gridCheck7" @if($history) @if($history->speech) checked @endif @endif>
                      <label class="form-check-label" for="gridCheck7">
                      Speech
                      </label>
                    </div>
                </div>
                <div class="col-3">
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" name="hygiene" id="gridCheck8" @if($history) @if($history->hygiene) checked @endif @endif>
                      <label class="form-check-label" for="gridCheck8">
                      Hygiene
                      </label>
                    </div>
                </div>
    
                <br><br>
                <h5 class="card-title">11. Past Dental History</h5>

                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Past Dental History" name="past_history" id="floatingpast_history" style="height: 100px;">@if($history){{$history->past_history}}@endif</textarea>
                    <label for="floatingpast_history">Past Dental History</label>
                  </div>
                </div>

                <br><br>
                <h5 class="card-title">12. Pubertal Status</h5>

                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Pubertal Status" name="pubertal_status" id="floatingpubertal_status" style="height: 100px;">@if($history){{$history->pubertal_status}}@endif</textarea>
                    <label for="floatingpubertal_status">Pubertal Status</label>
                  </div>
                </div>

                <br><br>
                <h5 class="card-title">13. Any Other Information</h5>

                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Any Other Information" name="other_info" id="floatingother_info" style="height: 100px;">@if($history){{$history->other_info}}@endif</textarea>
                    <label for="floatingother_info">Any Other Information</label>
                  </div>
                </div>

                <div class="text-center">
                  @if($history)
                  <button type="submit" class="btn btn-primary">Update</button>
                  @else
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                  @endif
                </div>
              </form><!-- End floating Labels Form -->

            </div>
          </div>
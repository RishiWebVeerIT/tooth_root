<div class="card" style="padding: 20px;">
  <div class="card-body">

    <!-- Floating Labels Form -->
    <form class="row g-3" method='post' action="#" enctype="multipart/form-data">
      <?php echo csrf_field(); ?>
      <input type="hidden" class="form-control" name="id" id="floatingcity" value="<?php echo e($id); ?>">
      <h5 class="card-title">1. Physical Status</h5>

      <div class="col-3">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingBuild" placeholder="Build">
          <label for="floatingBuild">Build</label>
        </div>
      </div>
      <div class="col-3">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingHeight" placeholder="Height">
          <label for="floatingHeight">Height</label>
        </div>
      </div>
      <div class="col-3">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingWeight" placeholder="Weight">
          <label for="floatingWeight">Weight</label>
        </div>
      </div>
      <div class="col-3">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingType" placeholder="Bode Type">
          <label for="floatingType">Bode Type</label>
        </div>
      </div>

      <br><br>

      <h5 class="card-title">2. Extra Oral Examination</h5>
      <div class="col-6">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingHeadShape" placeholder="Shape of Head">
          <label for="floatingHeadShape">Shape of Head</label>
        </div>
      </div>

      <div class="col-6">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingFacialForm" placeholder="Facial Form">
          <label for="floatingFacialForm">Facial Form</label>
        </div>
      </div>

      <div class="col-6">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingintelabiaGap" placeholder="Interlabial Gap">
          <label for="floatingintelabiaGap">Interlabial Gap</label>
        </div>
      </div>

      <div class="col-6">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingFacialProfile" placeholder="Facial Profile">
          <label for="floatingFacialProfile">Facial Profile</label>
        </div>
      </div>

      <div class="col-6">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingTonicity" placeholder="Lip Posture and tonicity">
          <label for="floatingTonicity">Lip Posture and tonicity</label>
        </div>
      </div>

      <div class="col-6">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingFacialDivergence" placeholder="Facial Divergence">
          <label for="floatingFacialDivergence">Facial Divergence</label>
        </div>
      </div>

      <div class="col-6">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingfma" placeholder="Clinical FMA">
          <label for="floatingfma">Clinical FMA</label>
        </div>
      </div>

      <div class="col-6">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingFacialNasobAngle" placeholder="Nasob Labial Angle">
          <label for="floatingFacialNasobAngle">Nasob Labial Angle</label>
        </div>
      </div>
      <div class="col-6">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingSulcus" placeholder="Mento Labial Sulcus">
          <label for="floatingSulcus">Mento Labial Sulcus</label>
        </div>
      </div>
      <div class="col-6">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingSmilearc" placeholder="Smile Arc">
          <label for="floatingSmilearc">Smile Arc</label>
        </div>
      </div>
      <br>
      <h5 class="card-title">&nbsp;&nbsp;Lip length : </h5>
      <div class="col-6">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingphiltrum" placeholder="At Philtrum">
          <label for="floatingphiltrum">At Philtrum</label>
        </div>
      </div>
      <div class="col-6">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingCornerofmouth" placeholder="At corner of Mouth">
          <label for="floatingCornerofmouth">At corner of Mouth</label>
        </div>
      </div>
      <br><br>
      <h5 class="card-title">3. Functional Examination</h5>
      <div class="col-6">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingRespiration" placeholder="Respiration">
          <label for="floatingRespiration">Respiration</label>
        </div>
      </div>
      <div class="col-6">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingDeglutition" placeholder="Deglutition">
          <label for="floatingDeglutition">Deglutition</label>
        </div>
      </div>
      <div class="col-6">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingMastication" placeholder="Mastication">
          <label for="floatingMastication">Mastication</label>
        </div>
      </div>
      <div class="col-6">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingSpeech" placeholder="Speech">
          <label for="floatingSpeech">Speech</label>
        </div>
      </div>
      <div class="col-12">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingPosturalRestPosition"
            placeholder="Postural Rest Position">
          <label for="floatingPosturalRestPosition">Postural Rest Position</label>
        </div>
      </div>
      <div class="col-12">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingPerioralMuscleActivity"
            placeholder="Perioral Muscle Activity">
          <label for="floatingPerioralMuscleActivity">Perioral Muscle Activity</label>
        </div>
      </div>
      <br>

      <h5 class="card-title">&nbsp;&nbsp;Amount of incisor exposure : Hyperactive Mental / Hypotonic Upperlip</h5>
      <div class="col-6">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingPerioralDuringSpeech" placeholder="During Speech">
          <label for="floatingPerioralDuringSpeech">During Speech</label>
        </div>
      </div>
      <div class="col-6">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingDuringSmile" placeholder="During Smile">
          <label for="floatingDuringSmile">During Smile</label>
        </div>
      </div>

      <br><br>
      <h5 class="card-title">&nbsp;&nbsp;T.M.J.</h5>


      <div class="col-3">
        <div class="form-floating mb-3">
          <select class="form-select" id="jaw_functionSelect" name="jaw_function"
            aria-label="Jaw function/TM Jt. Complaint now">
            <option selected>select</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
          </select>
          <label for="jaw_functionSelect">Jaw function/TM Jt. Complaint now</label>
        </div>
      </div>
      <div class="col-9">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingjaw_functionifyes" placeholder="If yes specify">
          <label for="floatingjaw_functionifyes">If yes specify</label>
        </div>
      </div>
      <div class="col-3">
        <div class="form-floating mb-3">
          <select class="form-select" id="history_of_painSelect" name="history_of_pain" aria-label="History of Pain">
            <option selected>select</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
          </select>
          <label for="history_of_painSelect">History of Pain</label>
        </div>
      </div>
      <div class="col-9">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatinghistory_of_painifyes" placeholder="Duration">
          <label for="floatinghistory_of_painifyes">Duration</label>
        </div>
      </div>
      <div class="col-3">
        <div class="form-floating mb-3">
          <select class="form-select" id="history_of_soundSelect" name="history_of_sounds"
            aria-label="History of Sounds">
            <option selected>select</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
          </select>
          <label for="history_of_soundSelect">History of Sounds</label>
        </div>
      </div>
      <div class="col-9">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatinghistory_of_soundsifyes" placeholder="Duration">
          <label for="floatinghistory_of_soundsifyes">Duration</label>
        </div>
      </div>
      <div class="col-4">
        <div class="form-floating mb-3">
          <select class="form-select" id="jointTendernessSelect" name="tm_joint_tenderness"
            aria-label="TM joint tenderness on palpation">
            <option selected>select</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
          </select>
          <label for="jointTendernessSelect">TM joint tenderness on palpation</label>
        </div>
      </div>
      <div class="col-4">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingjointTendernessifyesrt" placeholder="Rt.">
          <label for="floatingjointTendernessifyesrt">Rt.</label>
        </div>
      </div>
      <div class="col-4">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingjointTendernessifyeslt" placeholder="Lt.">
          <label for="floatingjointTendernessifyeslt">Lt.</label>
        </div>
      </div>
      <div class="col-3">
        <div class="form-floating mb-3">
          <select class="form-select" id="MuscleTendernessSelect" name="Muscle_tenderness"
            aria-label="Muscle tenderness on palpation">
            <option selected>select</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
          </select>
          <label for="MuscleTendernessSelect">Muscle tenderness on palpation</label>
        </div>
      </div>
      <div class="col-9">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingmuscleTendernessifyes" placeholder="Where">
          <label for="floatingmuscleTendernessifyes">Where</label>
        </div>
      </div>
      <br><br>
      <h5 class="card-title">&nbsp;&nbsp;Range of Motion</h5>
      <div class="col-3">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingMotionRangemax_opening" placeholder="Max opening">
          <label for="floatingMotionRangemax_opening">Max opening</label>
        </div>
      </div>
      <div class="col-3">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingMotionRangePosition" placeholder="Position">
          <label for="floatingMotionRangePosition">Position</label>
        </div>
      </div>
      <div class="col-3">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingMotionRangeRtExcursion" placeholder="Rt. Excurtion">
          <label for="floatingMotionRangeRtExcursion">Rt. Excurtion</label>
        </div>
      </div>
      <div class="col-3">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingMotionRangeLtExcursion" placeholder="Lt. Excurtion">
          <label for="floatingMotionRangeLtExcursion">Lt. Excurtion</label>
        </div>
      </div>

      <br><br>
      <h5 class="card-title">4. Intraoral Examination</h5>
      <div class="col-12">
        <div class="form-floating">
          <input type="text" class="form-control" placeholder="Soft Tissues" name="SoftTissues"
            id="floatingSoftTissues">
          <label for="floatingSoftTissues">Soft Tissues</label>
        </div>
      </div>
      <div class="col-12">
        <div class="form-floating">
          <input type="text" class="form-control" placeholder="Oral Hygine Status" name="OralHygine"
            id="floatingOralHygine">
          <label for="floatingOralHygine">Oral Hygine Status</label>
        </div>
      </div>
      <div class="col-6">
        <div class="form-floating mb-3">
          <select class="form-select" id="GingivaSelect" name="gingiva" aria-label="Gingiva">
            <option selected>select</option>
            <option value="Normal">Normal</option>
            <option value="Oedematous">Oedematous</option>
            <option value="Fibrous">Fibrous</option>
          </select>
          <label for="GingivaSelect">Gingiva</label>
        </div>
      </div>
      <div class="col-6">
        <div class="form-floating mb-3">
          <select class="form-select" id="BrushingHabitSelect" name="BrushingHabit" aria-label="Brushing Habit">
            <option selected>select</option>
            <option value="Good">Good</option>
            <option value="Satisfactory">Satisfactory</option>
            <option value="Poor">Poor</option>
          </select>
          <label for="BrushingHabitSelect">Brushing Habit</label>
        </div>
      </div>

      <div class="col-12">
        <div class="form-floating">
          <input type="text" class="form-control" placeholder="Position of mucogingival function"
            name="GingivalFunction" id="floatingGingivalFunction">
          <label for="floatingGingivalFunction">Position of mucogingival function</label>
        </div>
      </div>
      <div class="col-12">
        <div class="form-floating">
          <input type="text" class="form-control" placeholder="frenal Attachment Upper/Lower" name="FrenalAttachment"
            id="floatingFrenalAttachment">
          <label for="floatingFrenalAttachment">frenal Attachment Upper/Lower</label>
        </div>
      </div>
      <br>
      <h5 class="card-title">&nbsp;&nbsp;Tongue</h5>
      <div class="col-3">
        <div class="form-floating">
          <input type="text" class="form-control" placeholder="Size" name="ToungueSize" id="floatingToungueSize">
          <label for="floatingToungueSize">Size</label>
        </div>
      </div>
      <div class="col-3">
        <div class="form-floating">
          <input type="text" class="form-control" placeholder="Shape" name="ToungueShape" id="floatingToungueShape">
          <label for="floatingToungueShape">Shape</label>
        </div>
      </div>
      <div class="col-3">
        <div class="form-floating">
          <input type="text" class="form-control" placeholder="Movements" name="ToungueMovements"
            id="floatingToungueMovements">
          <label for="floatingToungueMovements">Movements</label>
        </div>
      </div>
      <div class="col-3">
        <div class="form-floating">
          <input type="text" class="form-control" placeholder="Posture" name="TounguePosture"
            id="floatingTounguePosture">
          <label for="floatingTounguePosture">Posture</label>
        </div>
      </div>

      <div class="col-12">
        <div class="form-floating">
          <input type="text" class="form-control" placeholder="Oral Mucosa" name="OralMucosa" id="floatingOralMucosa">
          <label for="floatingOralMucosa">Oral Mucosa</label>
        </div>
      </div>
      <div class="col-12">
        <div class="form-floating">
          <input type="text" class="form-control" placeholder="hard Tissue" name="HardTissue" id="floatingHardTissue">
          <label for="floatingHardTissue">Hard Tissue</label>
        </div>
      </div>
      <h5 class="card-title">&nbsp;&nbsp;Number of teeth present</h5>
      <div class="col-12">

        <div class="container">
          <div class="row divided_section_one">
            <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 add-content">
              <input class="cl-custom-check" id="marking_01" type="checkbox" />
              <label class="cl-custom-check-label" for="marking_01" title="Click for select/unselect">18</label>
              <input class="cl-custom-check" id="marking_02" type="checkbox" />
              <label class="cl-custom-check-label" for="marking_02" title="Click for select/unselect">17</label>
              <input class="cl-custom-check" id="marking_03" type="checkbox" />
              <label class="cl-custom-check-label" for="marking_03" title="Click for select/unselect">16</label>
              <input class="cl-custom-check" id="marking_04" type="checkbox" />
              <label class="cl-custom-check-label" for="marking_04" title="Click for select/unselect">15</label>
              <input class="cl-custom-check" id="marking_05" type="checkbox" />
              <label class="cl-custom-check-label" for="marking_05" title="Click for select/unselect">14</label>
              <input class="cl-custom-check" id="marking_06" type="checkbox" />
              <label class="cl-custom-check-label" for="marking_06" title="Click for select/unselect">13</label>
              <input class="cl-custom-check" id="marking_07" type="checkbox" />
              <label class="cl-custom-check-label" for="marking_07" title="Click for select/unselect">12</label>
              <input class="cl-custom-check" id="marking_08" type="checkbox" />
              <label class="cl-custom-check-label" for="marking_08" title="Click for select/unselect">11</label>
            </div>
            <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12">
              <input class="cl-custom-check" id="marking_09" type="checkbox" />
              <label class="cl-custom-check-label" for="marking_09" title="Click for select/unselect">21</label>
              <input class="cl-custom-check" id="marking_10" type="checkbox" />
              <label class="cl-custom-check-label" for="marking_10" title="Click for select/unselect">22</label>
              <input class="cl-custom-check" id="marking_11" type="checkbox" />
              <label class="cl-custom-check-label" for="marking_11" title="Click for select/unselect">23</label>
              <input class="cl-custom-check" id="marking_12" type="checkbox" />
              <label class="cl-custom-check-label" for="marking_12" title="Click for select/unselect">24</label>
              <input class="cl-custom-check" id="marking_13" type="checkbox" />
              <label class="cl-custom-check-label" for="marking_13" title="Click for select/unselect">25</label>
              <input class="cl-custom-check" id="marking_14" type="checkbox" />
              <label class="cl-custom-check-label" for="marking_14" title="Click for select/unselect">26</label>
              <input class="cl-custom-check" id="marking_15" type="checkbox" />
              <label class="cl-custom-check-label" for="marking_15" title="Click for select/unselect">27</label>
              <input class="cl-custom-check" id="marking_16" type="checkbox" />
              <label class="cl-custom-check-label" for="marking_16" title="Click for select/unselect">28</label>
            </div>
          </div>
        </div>
        <div class="row second-table">
          <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 add-content">
            <input class="cl-custom-check" id="marking_17" type="checkbox" />
            <label class="cl-custom-check-label" for="marking_17" title="Click for select/unselect">48</label>
            <input class="cl-custom-check" id="marking_18" type="checkbox" />
            <label class="cl-custom-check-label" for="marking_18" title="Click for select/unselect">47</label>
            <input class="cl-custom-check" id="marking_19" type="checkbox" />
            <label class="cl-custom-check-label" for="marking_19" title="Click for select/unselect">46</label>
            <input class="cl-custom-check" id="marking_20" type="checkbox" />
            <label class="cl-custom-check-label" for="marking_20" title="Click for select/unselect">45</label>
            <input class="cl-custom-check" id="marking_21" type="checkbox" />
            <label class="cl-custom-check-label" for="marking_21" title="Click for select/unselect">44</label>
            <input class="cl-custom-check" id="marking_22" type="checkbox" />
            <label class="cl-custom-check-label" for="marking_22" title="Click for select/unselect">43</label>
            <input class="cl-custom-check" id="marking_23" type="checkbox" />
            <label class="cl-custom-check-label" for="marking_23" title="Click for select/unselect">42</label>
            <input class="cl-custom-check" id="marking_24" type="checkbox" />
            <label class="cl-custom-check-label" for="marking_24" title="Click for select/unselect">41</label>
          </div>
          <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12">
            <input class="cl-custom-check" id="marking_25" type="checkbox" />
            <label class="cl-custom-check-label" for="marking_25" title="Click for select/unselect">31</label>
            <input class="cl-custom-check" id="marking_26" type="checkbox" />
            <label class="cl-custom-check-label" for="marking_26" title="Click for select/unselect">32</label>
            <input class="cl-custom-check" id="marking_27" type="checkbox" />
            <label class="cl-custom-check-label" for="marking_27" title="Click for select/unselect">33</label>
            <input class="cl-custom-check" id="marking_28" type="checkbox" />
            <label class="cl-custom-check-label" for="marking_28" title="Click for select/unselect">34</label>
            <input class="cl-custom-check" id="marking_29" type="checkbox" />
            <label class="cl-custom-check-label" for="marking_29" title="Click for select/unselect">35</label>
            <input class="cl-custom-check" id="marking_30" type="checkbox" />
            <label class="cl-custom-check-label" for="marking_30" title="Click for select/unselect">36</label>
            <input class="cl-custom-check" id="marking_31" type="checkbox" />
            <label class="cl-custom-check-label" for="marking_31" title="Click for select/unselect">37</label>
            <input class="cl-custom-check" id="marking_32" type="checkbox" />
            <label class="cl-custom-check-label" for="marking_32" title="Click for select/unselect">38</label>
          </div>
        </div>
      </div>

      <br><br><br><br>
      <div class="col-6">
        <div class="form-floating text-center">
          <input type="text" class="form-control" placeholder="No. of Unerupted Teeth" name="UneruptedTeeth"
            id="floatingUneruptedTeeth">
          <label for="floatingUneruptedTeeth">No. of Unerupted Teeth</label>
        </div>
      </div>
      <div class="col-6">
        <div class="form-floating text-center">
          <input type="text" class="form-control" placeholder="Supernumerary/Missing teeth" name="MissingTeeth"
            id="floatingMissingTeeth">
          <label for="floatingMissingTeeth">Supernumerary/Missing teeth</label>
        </div>
      </div>
      <div class="col-6">
        <div class="form-floating text-center">
          <input type="text" class="form-control" placeholder="Size, form of teeth" name="TeethSize"
            id="floatingTeethSize">
          <label for="floatingTeethSize">Size, form of teeth</label>
        </div>
      </div>
      <div class="col-6">
        <div class="form-floating">
          <input type="text" class="form-control" placeholder="Teeth Texture" name="MissingTeeth"
            id="floatingMissingTeeth">
          <label for="floatingMissingTeeth">Teeth Texture</label>
        </div>
      </div>
      <div class="col-3">
        <div class="form-check">
          <input class="form-check-input" value="1" name="Carries" type="checkbox" id="gridCheck12">
          <label class="form-check-label" for="gridCheck12">
            Carries
          </label>
        </div>
      </div>
      <div class="col-4">
        <div class="form-check">
          <input class="form-check-input" value="1" name="Endodontically_treated" type="checkbox" id="gridCheck10">
          <label class="form-check-label" for="gridCheck10">
            Endodontically Treated
          </label>
        </div>
      </div>
      <div class="col-3">
        <div class="form-check">
          <input class="form-check-input" value="1" name="occlusal_wear_facets" type="checkbox" id="gridCheck11">
          <label class="form-check-label" for="gridCheck11">
            Occlusal Wear Facets
          </label>
        </div>
      </div>
      <br>
      <h5 class="card-title">&nbsp;&nbsp;Maxillary Arch</h5>
      <div class="col-6">
        <div class="form-floating mb-3">
          <select class="form-select" id="ShapeSelect" name="MaxillaryShape" aria-label="Shape">
            <option selected>select</option>
            <option value="Average">Average</option>
            <option value="V Shaped">'V' Shaped</option>
            <option value="U Shaped">'U' Shaped</option>
            <option value="Square">Square</option>
          </select>
          <label for="ShapeSelect">Shape</label>
        </div>
      </div>
      <div class="col-6">
        <div class="form-floating mb-3">
          <select class="form-select" id="SymmetrySelect" name="Symmetry" aria-label="Arch Symmetry">
            <option selected>select</option>
            <option value="Symmetrical">Symmetrical</option>
            <option value="Asymmetrical">Asymmetrical</option>
          </select>
          <label for="SymmetrySelect">Arch Symmetry</label>
        </div>
      </div>
      <div class="col-12">
        <div class="form-floating">
          <input type="text" class="form-control" placeholder="Arch Alignment" name="ArchAlignment"
            id="floatingArchAlignment">
          <label for="floatingArchAlignment">Arch Alignment</label>
        </div>
      </div>
      <br>
      <h5 class="card-title">&nbsp;&nbsp;Relation of Mandibular of Maxillary Arch</h5>
      <div class="col-4">
        <div class="form-floating">
          <input type="text" class="form-control" placeholder="Maximum Opening(Incisal edges)" name="MaximumOpening"
            id="floatingMaximumOpening">
          <label for="floatingMaximumOpening">Maximum Opening(Incisal edges)</label>
        </div>
      </div>
      <div class="col-4">
        <div class="form-floating">
          <input type="text" class="form-control" placeholder="Freeway Space" name="FreewaySpace"
            id="floatingFreewaySpace">
          <label for="floatingFreewaySpace">Freeway Space</label>
        </div>
      </div>
      <div class="col-4">
        <div class="form-floating">
          <input type="text" class="form-control" placeholder="Curve of Spee" name="SpeeCurve"
            id="floatingSpeeCurve">
          <label for="floatingSpeeCurve">Curve of Spee</label>
        </div>
      </div>

      <div class="text-center">

        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-secondary">Reset</button>

      </div>
    </form><!-- End floating Labels Form -->

  </div>
</div><?php /**PATH C:\Users\VeerIt\Downloads\one_scan\resources\views/admin/tabs/clinical_examination.blade.php ENDPATH**/ ?>
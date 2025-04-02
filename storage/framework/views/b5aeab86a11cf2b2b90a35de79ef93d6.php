<div class="card" style="padding: 20px;">
  <div class="card-body">

    <!-- Floating Labels Form -->
    <form class="row g-3" method='post' action="#" enctype="multipart/form-data">
      <?php echo csrf_field(); ?>
      <input type="hidden" class="form-control" name="id" id="floatingcity" value="<?php echo e($id); ?>">
      <h5 class="card-title">1. AP Plane</h5>

      <div class="col-4">
        1.Molar R1 Ship
      </div>
      <div class="col-4">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingMolarRtSide" placeholder="MolarRtSide">
          <label for="floatingMolarRtSide">RT Side</label>
        </div>
      </div>
      <div class="col-4">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingMolarLtSide" placeholder="MolarLtSide">
          <label for="floatingMolarLtSide">Lt Side</label>
        </div>
      </div>
      <div class="col-4">
        2. Caniner'ship
      </div>
      <div class="col-4">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingCaninerRtSide" placeholder="CaninerRtSide">
          <label for="floatingCaninerRtSide">RT Side</label>
        </div>
      </div>
      <div class="col-4">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingCaninerLtSide" placeholder="CaninerLtSide">
          <label for="floatingCaninerLtSide">Lt Side</label>
        </div>
      </div>


      <div class="col-6">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingOverjet" placeholder="Overjet">
          <label for="floatingOverjet">Overjet</label>
        </div>
      </div>

      <div class="col-6">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingCrossbite" placeholder="Crossbite">
          <label for="floatingCrossbite">ANT Crossbite</label>
        </div>
      </div>

      
<br><br>
      <h5 class="card-title">2. Vertical Plane</h5>
      <div class="col-4">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingOpenBiteAnt" placeholder="Open Bite Ant">
          <label for="floatingOpenBiteAnt">Open Bite Ant</label>
        </div>
      </div>
      <div class="col-4">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingOpenBitePost" placeholder="Open Bite Post">
          <label for="floatingOpenBitePost">Open Bite Post</label>
        </div>
      </div>
      <div class="col-4">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingDeepbite" placeholder="Deepbite">
          <label for="floatingDeepbite">Deepbite</label>
        </div>
      </div>

      <br><br>
      <h5 class="card-title">3. Transverse Plane</h5>
      <div class="col-6">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingPostCrossbite" placeholder="Post Crossbite">
          <label for="floatingPostCrossbite">Post Crossbite</label>
        </div>
      </div>

      <div class="col-6">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingScissorBite" placeholder="Scissor Bite">
          <label for="floatingScissorBite">Scissor Bite</label>
        </div>
      </div>
      <br><br>
      <h5 class="card-title">4. Radiographic and Cephalometric Record</h5>

      <h5 class="card-title">&nbsp;&nbsp;Intra Oral Radiographs : </h5>

      <h5 class="card-title">&nbsp;&nbsp;Teeth present</h5>
      <div class="col-12">

        <div class="container">
          <div class="row divided_section_one">
            <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 add-content">
              <input class="cl-custom-check" id="marking_101" type="checkbox" />
              <label class="cl-custom-check-label" for="marking_101" title="Click for select/unselect">18</label>
              <input class="cl-custom-check" id="marking_102" type="checkbox" />
              <label class="cl-custom-check-label" for="marking_102" title="Click for select/unselect">17</label>
              <input class="cl-custom-check" id="marking_103" type="checkbox" />
              <label class="cl-custom-check-label" for="marking_103" title="Click for select/unselect">16</label>
              <input class="cl-custom-check" id="marking_104" type="checkbox" />
              <label class="cl-custom-check-label" for="marking_104" title="Click for select/unselect">15</label>
              <input class="cl-custom-check" id="marking_105" type="checkbox" />
              <label class="cl-custom-check-label" for="marking_105" title="Click for select/unselect">14</label>
              <input class="cl-custom-check" id="marking_106" type="checkbox" />
              <label class="cl-custom-check-label" for="marking_106" title="Click for select/unselect">13</label>
              <input class="cl-custom-check" id="marking_107" type="checkbox" />
              <label class="cl-custom-check-label" for="marking_107" title="Click for select/unselect">12</label>
              <input class="cl-custom-check" id="marking_108" type="checkbox" />
              <label class="cl-custom-check-label" for="marking_108" title="Click for select/unselect">11</label>
            </div>
            <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12">
              <input class="cl-custom-check" id="marking_109" type="checkbox" />
              <label class="cl-custom-check-label" for="marking_109" title="Click for select/unselect">21</label>
              <input class="cl-custom-check" id="marking_110" type="checkbox" />
              <label class="cl-custom-check-label" for="marking_110" title="Click for select/unselect">22</label>
              <input class="cl-custom-check" id="marking_111" type="checkbox" />
              <label class="cl-custom-check-label" for="marking_111" title="Click for select/unselect">23</label>
              <input class="cl-custom-check" id="marking_112" type="checkbox" />
              <label class="cl-custom-check-label" for="marking_112" title="Click for select/unselect">24</label>
              <input class="cl-custom-check" id="marking_113" type="checkbox" />
              <label class="cl-custom-check-label" for="marking_113" title="Click for select/unselect">25</label>
              <input class="cl-custom-check" id="marking_114" type="checkbox" />
              <label class="cl-custom-check-label" for="marking_114" title="Click for select/unselect">26</label>
              <input class="cl-custom-check" id="marking_115" type="checkbox" />
              <label class="cl-custom-check-label" for="marking_115" title="Click for select/unselect">27</label>
              <input class="cl-custom-check" id="marking_116" type="checkbox" />
              <label class="cl-custom-check-label" for="marking_116" title="Click for select/unselect">28</label>
            </div>
          </div>
        </div>
        <div class="row second-table">
          <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 add-content">
            <input class="cl-custom-check" id="marking_117" type="checkbox" />
            <label class="cl-custom-check-label" for="marking_117" title="Click for select/unselect">48</label>
            <input class="cl-custom-check" id="marking_118" type="checkbox" />
            <label class="cl-custom-check-label" for="marking_118" title="Click for select/unselect">47</label>
            <input class="cl-custom-check" id="marking_119" type="checkbox" />
            <label class="cl-custom-check-label" for="marking_119" title="Click for select/unselect">46</label>
            <input class="cl-custom-check" id="marking_120" type="checkbox" />
            <label class="cl-custom-check-label" for="marking_120" title="Click for select/unselect">45</label>
            <input class="cl-custom-check" id="marking_121" type="checkbox" />
            <label class="cl-custom-check-label" for="marking_121" title="Click for select/unselect">44</label>
            <input class="cl-custom-check" id="marking_122" type="checkbox" />
            <label class="cl-custom-check-label" for="marking_122" title="Click for select/unselect">43</label>
            <input class="cl-custom-check" id="marking_123" type="checkbox" />
            <label class="cl-custom-check-label" for="marking_123" title="Click for select/unselect">42</label>
            <input class="cl-custom-check" id="marking_124" type="checkbox" />
            <label class="cl-custom-check-label" for="marking_124" title="Click for select/unselect">41</label>
          </div>
          <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12">
            <input class="cl-custom-check" id="marking_125" type="checkbox" />
            <label class="cl-custom-check-label" for="marking_125" title="Click for select/unselect">31</label>
            <input class="cl-custom-check" id="marking_126" type="checkbox" />
            <label class="cl-custom-check-label" for="marking_126" title="Click for select/unselect">32</label>
            <input class="cl-custom-check" id="marking_127" type="checkbox" />
            <label class="cl-custom-check-label" for="marking_127" title="Click for select/unselect">33</label>
            <input class="cl-custom-check" id="marking_128" type="checkbox" />
            <label class="cl-custom-check-label" for="marking_128" title="Click for select/unselect">34</label>
            <input class="cl-custom-check" id="marking_129" type="checkbox" />
            <label class="cl-custom-check-label" for="marking_129" title="Click for select/unselect">35</label>
            <input class="cl-custom-check" id="marking_130" type="checkbox" />
            <label class="cl-custom-check-label" for="marking_130" title="Click for select/unselect">36</label>
            <input class="cl-custom-check" id="marking_131" type="checkbox" />
            <label class="cl-custom-check-label" for="marking_131" title="Click for select/unselect">37</label>
            <input class="cl-custom-check" id="marking_132" type="checkbox" />
            <label class="cl-custom-check-label" for="marking_132" title="Click for select/unselect">38</label>
          </div>
        </div>
      </div>
<br><br>
      <h5 class="card-title">&nbsp;&nbsp;Teeth Absent</h5>
      <div class="col-12">

        <div class="container">
          <div class="row divided_section_one">
            <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 add-content">
              <input class="cl-custom-check" id="marking_201" type="checkbox" />
              <label class="cl-custom-check-label" for="marking_201" title="Click for select/unselect">18</label>
              <input class="cl-custom-check" id="marking_202" type="checkbox" />
              <label class="cl-custom-check-label" for="marking_202" title="Click for select/unselect">17</label>
              <input class="cl-custom-check" id="marking_203" type="checkbox" />
              <label class="cl-custom-check-label" for="marking_203" title="Click for select/unselect">16</label>
              <input class="cl-custom-check" id="marking_204" type="checkbox" />
              <label class="cl-custom-check-label" for="marking_204" title="Click for select/unselect">15</label>
              <input class="cl-custom-check" id="marking_205" type="checkbox" />
              <label class="cl-custom-check-label" for="marking_205" title="Click for select/unselect">14</label>
              <input class="cl-custom-check" id="marking_206" type="checkbox" />
              <label class="cl-custom-check-label" for="marking_206" title="Click for select/unselect">13</label>
              <input class="cl-custom-check" id="marking_207" type="checkbox" />
              <label class="cl-custom-check-label" for="marking_207" title="Click for select/unselect">12</label>
              <input class="cl-custom-check" id="marking_208" type="checkbox" />
              <label class="cl-custom-check-label" for="marking_208" title="Click for select/unselect">11</label>
            </div>
            <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12">
              <input class="cl-custom-check" id="marking_209" type="checkbox" />
              <label class="cl-custom-check-label" for="marking_209" title="Click for select/unselect">21</label>
              <input class="cl-custom-check" id="marking_210" type="checkbox" />
              <label class="cl-custom-check-label" for="marking_210" title="Click for select/unselect">22</label>
              <input class="cl-custom-check" id="marking_211" type="checkbox" />
              <label class="cl-custom-check-label" for="marking_211" title="Click for select/unselect">23</label>
              <input class="cl-custom-check" id="marking_212" type="checkbox" />
              <label class="cl-custom-check-label" for="marking_212" title="Click for select/unselect">24</label>
              <input class="cl-custom-check" id="marking_213" type="checkbox" />
              <label class="cl-custom-check-label" for="marking_213" title="Click for select/unselect">25</label>
              <input class="cl-custom-check" id="marking_214" type="checkbox" />
              <label class="cl-custom-check-label" for="marking_214" title="Click for select/unselect">26</label>
              <input class="cl-custom-check" id="marking_215" type="checkbox" />
              <label class="cl-custom-check-label" for="marking_215" title="Click for select/unselect">27</label>
              <input class="cl-custom-check" id="marking_216" type="checkbox" />
              <label class="cl-custom-check-label" for="marking_216" title="Click for select/unselect">28</label>
            </div>
          </div>
        </div>
        <div class="row second-table">
          <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 add-content">
            <input class="cl-custom-check" id="marking_217" type="checkbox" />
            <label class="cl-custom-check-label" for="marking_217" title="Click for select/unselect">48</label>
            <input class="cl-custom-check" id="marking_218" type="checkbox" />
            <label class="cl-custom-check-label" for="marking_218" title="Click for select/unselect">47</label>
            <input class="cl-custom-check" id="marking_219" type="checkbox" />
            <label class="cl-custom-check-label" for="marking_219" title="Click for select/unselect">46</label>
            <input class="cl-custom-check" id="marking_220" type="checkbox" />
            <label class="cl-custom-check-label" for="marking_220" title="Click for select/unselect">45</label>
            <input class="cl-custom-check" id="marking_221" type="checkbox" />
            <label class="cl-custom-check-label" for="marking_221" title="Click for select/unselect">44</label>
            <input class="cl-custom-check" id="marking_222" type="checkbox" />
            <label class="cl-custom-check-label" for="marking_222" title="Click for select/unselect">43</label>
            <input class="cl-custom-check" id="marking_223" type="checkbox" />
            <label class="cl-custom-check-label" for="marking_223" title="Click for select/unselect">42</label>
            <input class="cl-custom-check" id="marking_224" type="checkbox" />
            <label class="cl-custom-check-label" for="marking_224" title="Click for select/unselect">41</label>
          </div>
          <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12">
            <input class="cl-custom-check" id="marking_225" type="checkbox" />
            <label class="cl-custom-check-label" for="marking_225" title="Click for select/unselect">31</label>
            <input class="cl-custom-check" id="marking_226" type="checkbox" />
            <label class="cl-custom-check-label" for="marking_226" title="Click for select/unselect">32</label>
            <input class="cl-custom-check" id="marking_227" type="checkbox" />
            <label class="cl-custom-check-label" for="marking_227" title="Click for select/unselect">33</label>
            <input class="cl-custom-check" id="marking_228" type="checkbox" />
            <label class="cl-custom-check-label" for="marking_228" title="Click for select/unselect">34</label>
            <input class="cl-custom-check" id="marking_229" type="checkbox" />
            <label class="cl-custom-check-label" for="marking_229" title="Click for select/unselect">35</label>
            <input class="cl-custom-check" id="marking_230" type="checkbox" />
            <label class="cl-custom-check-label" for="marking_230" title="Click for select/unselect">36</label>
            <input class="cl-custom-check" id="marking_231" type="checkbox" />
            <label class="cl-custom-check-label" for="marking_231" title="Click for select/unselect">37</label>
            <input class="cl-custom-check" id="marking_232" type="checkbox" />
            <label class="cl-custom-check-label" for="marking_232" title="Click for select/unselect">38</label>
          </div>
        </div>
      </div>
      <br><br>
      <div class="col-12" style="margin-top: 100px">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingCrownFormation" placeholder="Crown Formation">
          <label for="floatingCrownFormation">Crown Formation</label>
        </div>
      </div>

      <div class="col-12">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingCrownCompletion" placeholder="Crown Completion">
          <label for="floatingCrownCompletion">Crown Completion</label>
        </div>
      </div>

      <div class="col-6">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingRootResporation" placeholder="Root Resporation">
          <label for="floatingRootResporation">Root Resporation</label>
        </div>
      </div>

      <div class="col-6">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingDeciduosTeeth" placeholder="Deciduos Teeth">
          <label for="floatingDeciduosTeeth">Deciduos Teeth</label>
        </div>
      </div>

      <div class="col-6">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingRootFormation" placeholder="Root Formation">
          <label for="floatingRootFormation">Root Formation</label>
        </div>
      </div>
      <div class="col-6">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingPermanentTeeth" placeholder="Permanent Teeth">
          <label for="floatingPermanentTeeth">Permanent Teeth</label>
        </div>
      </div>
      <div class="col-12">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingEruptionLevel" placeholder="Eruption Level">
          <label for="floatingEruptionLevel">Eruption Level</label>
        </div>
      </div>
      <div class="col-12">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingCharacterResotoration" placeholder="Character Restoration">
          <label for="floatingCharacterResotoration">Character Restoration</label>
        </div>
      </div>
      <div class="col-12">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingLaminaDura" placeholder="Lamina Dura and height of interdental crest">
          <label for="floatingLaminaDura">Lamina Dura and height of interdental crest</label>
        </div>
      </div>
      <div class="col-12">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingSupernumeryTeeth" placeholder="Supernumerary Teeth">
          <label for="floatingSupernumeryTeeth">Supernumerary Teeth</label>
        </div>
      </div>
      <div class="col-12">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingThirdMolar" placeholder="Third Molar">
          <label for="floatingThirdMolar">Third Molar</label>
        </div>
      </div>
      <div class="col-12">
        <div class="form-floating">
          <textarea class="form-control" id="floatingPathalogicalCondition" placeholder="Pathalogical Condition" style="height: 150px;"></textarea>
          <label for="floatingPathalogicalCondition">Pathalogical Condition</label>
        </div>
      </div>
      <div class="col-12">
        <div class="form-floating">
          <textarea class="form-control" id="floatingSpecialInvestigation" placeholder="Special Investigation" style="height: 150px;"></textarea>
          <label for="floatingSpecialInvestigation">Special Investigation</label>
        </div>
      </div>
      <br>

      <div class="text-center">

        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-secondary">Reset</button>

      </div>
    </form><!-- End floating Labels Form -->

  </div>
</div><?php /**PATH C:\Users\VeerIt\Downloads\one_scan\resources\views/admin/tabs/model_occulsion.blade.php ENDPATH**/ ?>
        <section class="inner-banner">
            <div class="container">
                <ul class="list-unstyled thm-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active"><a href="#">Admissions</a></li>
                </ul><!-- /.list-unstyled -->
                <h2 class="inner-banner__title">Admissions</h2><!-- /.inner-banner__title -->
            </div><!-- /.container -->
        </section><!-- /.inner-banner -->
        
        
        <section class="contact-info-one">
            <div class="container">
                <?php if($types != false){ ?>
                <div class="row mb-5">
                    <?php foreach($types as $type){ $admissions = $dis->admissions($type->type); if($admissions != false){ ?>
                        <div class="col-md-<?=($type->type == 'Diploma')?'12':'6';?>">
                        <h4 class="upper mt-3 mb-3"><?=$type->type;?></h4>
                        <table class="table table-striped table-hover" width="100%">
                            <thead>
                                <tr>
                                    <th>SL.NO</th>
                                    <th>COURSE</th>
                                    <th>INTAKE</th>
                                    <th>TUTION FEE</th>
                                </tr>
                            </thead>
                        <tbody>
                            <?php $sno = 1; foreach($admissions as $admission){ ?>
                            <tr>
                                <td><?=$sno++;?></td>
                                <td><?=$admission->course_name;?></td>
                                <td><?=$admission->intake;?></td>
                                <td>Rs. <?=$admission->fee;?>/-</td>
                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                        
                                                        
                    </div>
                    <?php } } ?>
                </div> 
                <?php } ?>                             
                <h3 style="text-align:center;">ADMISSIONS</h3>
                                                 <p style="text-align:center;"><strong>EAMCET / ECET / PGECET/ICET /POLYCET/ Counselling </strong></p>
                                                 <h4 style="text-align:center;">code: VGSE</h4>
                                                 <br>
                                                 <h4>B-Category Notification 2021</h4>
                                                  <h4>B-Category Application 2021</h4>
                                                   <h4>B-Category Advertisement 2021</h4>
                                                   <br>
                                                   <h4 style="text-align:center;">Required Documents for B. Tech Admissions A.Y- 2021-22</h4>
                                                 <br>
                                                     <table class="table table-striped table-hover" width="100%">
                                                     <thead><tr>
                                                         <th>S.NO</th>
                                                         <th>PARTICULARS</th>
                                                     </tr>
                    </thead>
                    <tbody>
                                                     <tr>
                                                         <td>1</td>
                                                          <td>SSC(ORIGINAL)</td>
                                                     </tr>
                                                       <tr>
                                                         <td>2</td>
                                                          <td>INTERMEDIATE/ EQUIVALENT FROM TS-INTERMEDIATE BOARD (IF STUDY IN OTHER STATE)</td>
                                                     </tr>
                                                       <tr>
                                                         <td>3</td>
                                                          <td>TRANSFER CERTIFICATE</td>
                                                     </tr>
                                                       <tr>
                                                         <td>4</td>
                                                          <td>EAMCET / ECET (HALL TICKET &amp; RANK CARD)</td>
                                                     </tr>
                                                       <tr>
                                                         <td>5</td>
                                                          <td>BONAFIDE / STUDY CERTIFICATE (ORIGINAL)</td>
                                                     </tr>
                                                       <tr>
                                                         <td>6</td>
                                                          <td>MIGRATION CERTIFICATE (IF STUDY IN OTHER STATE)</td>
                                                     </tr>
                                                       <tr>
                                                         <td>7</td>
                                                          <td>SIX PASSPORT SIZE PHOTOS</td>
                                                     </tr>
                                                       <tr>
                                                         <td>8</td>
                                                          <td>THREE SETS OF XEROX COPIES OF ALL CERTIFICATES</td>
                                                     </tr>
                                                       <tr>
                                                         <td>9</td>
                                                          <td>AADHAR CARD XEROX (THREE COPIES)</td>
                                                     </tr>
                                                 </tbody></table>
                        
                    </div>
                    
                    
                    
    <div class="container">                                       

                                              <br>
         <p style="color:red;text-align:center;"><strong>ELIGIBILITY CRITERIA FOR ADMISSIONS INTO UG(B.Tech) PROGRAMME</strong></p>
                             <h4>Convener Quota: </h4> 
                             <p><strong>70% of Admissions are carried out under Convener Quota.</strong></p>
                             <p>To seek admission under this Quota into the First Year of 4-year B.Tech course in any branch, he/she must satisfy the following requirements:</p>
                           <p>A student must have passed the Intermediate Examination of the Board of Intermediate Education, Government of Telangana with Mathematics, Physics and Chemistry as optional subjects, or any other examination recognized by the Government of Telangana as its equivalent</p>
                           <p>All the eligible candidates for admission into First Year shall have to qualify in the EAMCET Examination conducted by the Govt. of TS.</p>
                           <p>The candidates will be admitted by EAMCET Convener strictly in accordance with the rank secured at the Entrance Examination and keeping the rules applicable in view, regarding the reservation of seats of various categories of candidates.</p>
                                  
                                  <br>
                                  <h4>Management Quota:</h4>
                                  <p><strong>30% of the total seats will be considered under Management Quota.</strong></p>
                                  <p>To seek admission under Management Quota, he/she must satisfy the following requirements:</p>
                                  <p>A student should either have obtained a rank or should have secured a minimum aggregate percentage of 50% in group subjects (Mathematics, Physics and Chemistry) in the Intermediate Examination of the Board of Intermediate Education, Government of Telangana or any other examination recognized by the Government of Telangana as its equivalent.</p>
                                  <br>
                                  <p style="text-align:center;color:red"><strong>ECET (For lateral admission into 2nd year regular B.E. / B.Tech.)- Eligibility Requirements:</strong>
                                  </p><p>The student will be ranked (Integrated Merit Rank) based on the marks obtained by him / her in the TS ECET [FDH &amp; B.Sc. (Mathematics)] -Examination.</p>
               <p><strong>Candidates should satisfy the following requirements :</strong></p>
               <p>i. They should be of Indian Nationality. </p>
               <p>ii. They should belong to the State of Telangana / Andhra Pradesh. The candidates should satisfy local / nonlocal status requirements as laid down in the Andhra Pradesh Educational Institutions (Regulation of Admission) Order, 1974 as subsequently amended. The same is adapted to the State of Telangana G.O.Ms. No. 33 dated 31.12.2014. </p>
    <p>iii. They should have obtained a Diploma in Engineering and Technology / Pharmacy from the State Board of Technical Education of Telangana / Andhra Pradesh or any other Diploma recognized by the Government of Telangana / Andhra Pradesh as equivalent there to for admission into the relevant B.E. / B. Tech./ B. Pharmacy Courses corresponding to the Diploma as given in the Instruction Booklet. </p>
    <h4 style="text-align:center;">(OR)</h4>
    <p>They should have passed the 3 - year B.Sc. Degree examination with Mathematics as one of the subjects in the group combination from a recognized University in the Telangana / Andhra Pradesh State or its equivalent for entry into relevant courses as given in the Instruction Booklet.</p>
    <p>iv. As per G.O. Ms. No. 58 dated 12.05.2008, for admission into B.E / B.Tech in Computer Science and Engineering, first preference will be given to candidates who have obtained the diploma in Computer Science Engineering. Any seats still vacant shall be filled with candidates who have obtained their Diploma in any branch of Engineering / Technology on the basis of their integrated merit rank obtained in TS ECET [FDH &amp; B.Sc. (Mathematics)] - 2021. The Integrated Merit Rank is based on the total marks obtained in TS ECET [FDH &amp; B.Sc. (Mathematics)] - 2021 by candidates with Diploma in any branch of Engineering / Technology.</p>
  <br>
  <h4 style="text-align:center;color:red">ELIGIBILITY CRITERIA FOR ADMISSIONS INTO PG PROGRAMME</h4>
  <h4>M.Tech – Eligibility Requirements:</h4>
  <p>The Convener admits 70% of the intake to the M.Tech program based on the GATE/TS-PGECET rank.</p>
  <p>The Management admits the remaining 30% under Management quota.</p>
  <p>Admission for Category-A  students will be made through GATE. When GATE Candidates are not available, admission will be given to Non-GATE Candidates on TS-PGECET merit. Admission for Category-B will be made based on merit. </p>
  <br>
  <!--<h4>STIPEND/SCHOLARSHIP</h4>-->
  <!--<p>No Stipend / Scholarship will be paid by the College. However, if the Govt. of India / AICTE sanctions any Stipend / Scholarship the same will be paid to the respective eligible GATE Qualified Candidates. When AICTE / Govt. of India sanctioned scholarships are less than the no. of Non-Sponsored GATE qualified candidates, the scholarship will be distributed based on the merit in GATE.</p>-->
  <!--<p>Category-B Candidates will not be eligible to receive stipend / Scholarship, even if they are admitted based on GATE Score.</p>-->
  <br>

</div>
                    
    <div class="container">                   

    <table class="table table-striped table-hover" width="100%">
      <thead><tr>
          <th>S.NO</th>
           <th>Name of the PG Programme</th>
            <th>Eligibility</th>
      </tr>
      </thead>
      <tbody>
      <tr>
          <td>1</td>
        <td>M.Tech(CSE)</td>
        <td>B.E./B.Tech/AMIE in CSE/CSIT/Electronics &amp; Computer Engg., / IT &amp; Computer Science and Systems Engineering or Equivalent</td>
      </tr>
<!--
        <tr>
          <td>2</td>
        <td>M. Tech (Power Electronics)</td>
        <td>B.E./B.Tech./AMIE in Electrical &amp; Electronics Engg. /Electrical Engg. (or) Equivalent</td>
      </tr>
        <tr>
          <td>3</td>
        <td>M. Tech (VLSI &amp; Embedded Systems)</td>
        <td>B.E./B.Tech./AMIE in ECE / EEE /
CSE / Electronics &amp; Computers Engg /
ETE/ IT/CSIT/ Electronics &amp; Control
Engg./Instrumentation Engg./
Instrumentation Technology / EIE
/ICE/ Electronics Engg.,/Bio- Medical
Engg./ AMIETE and Electronics and
Telematics Engg. / Electronics or
equivalent
</td>
      </tr>
-->

  </tbody></table>
  <h4>MCA – Eligibility Requirements:</h4>
  <p>The Convener admits 70% of the intake to the MCA program based on the ICET rank.</p>
  <p>The Management admits the remaining 30% under Management quota.</p>
  <br>
  <p><strong>A candidate seeking admission into Two years MCA programmes must satisfy the following criteria:</strong></p>
  <p>1.	Should have passed recognized Bachelors Degree examination of minimum three years duration with at least 50% marks (45% marks in case of reserved (SC and ST) categories) in the qualifying examination with Mathematics at 10+2 level or at Graduation level. </p>
   <p>2.	Must have qualified in Integrated Common Entrance Test (ICET) conducted by Telangana State Council of Higher Education, Govt of TS.</p>
   <p>3.	The candidates will be admitted strictly in accordance with the merit secured at the ICET.</p>
   <p>4.	The candidates should satisfy local/non-local status requirement as laid down in the TS Educational institutions (Regulation of Admissions) Order 1974 as amended from time to time.</p>
   <br>
   <h4>MBA – Eligibility Requirements:</h4>
   <p>The Convener admits 70% of the intake to the MBA program based on the ICET rank.</p>
   <p>The Management admits the remaining 30% under Management quota.</p>
   <br>
   <p><strong>A candidate seeking admission into Two years MBA programmes must satisfy the following criteria:</strong></p>
   <p>1.	A pass in a bachelor’s degree in any field with 45% marks in aggregate.</p>
   <p>2.	Must have qualified in Integrated Common Entrance Test (ICET) conducted by Telangana State Council of Higher Education, Govt of TS.</p>
   <p>3.	The candidates will be admitted strictly in accordance with the merit secured at the ICET.</p>
   <p>4.	The candidates should satisfy local/non-local status requirement as laid down in the TS Educational institutions (Regulation of Admissions) Order 1974 as amended from time to time.</p>
   <br>
   
<!--
   <h4 style="text-align:center;color:red">Eligibility Criteria for Polytechnic (DIPLOMA) Admissions</h4>
   <p>The Convener admits 100% of the intake to the Diploma program based on the POLYCET rank.</p>
   <p>1.The candidate must have completed Senior Secondary Examination SSC, from the State Board of Secondary Education, Andhra Pradesh/ Telangana or equivalent examination. Candidates from CBSE, ICSE, NIOS, Telangana Open School Society (TOSS), A.P. Open School Society (APOSS) are also eligible to apply.</p>
   <p>2. Mathematics must be a compulsory subject in Class X. The minimum marks obtained in standard X must be 35%.</p>
   <p>3. Candidates from NIOS/TOSS/APOSS/CBSE/ICSE/OTHER board must have passing marks in all the subjects and Mathematics, Physics, Chemistry must be major subjects. The minimum qualifying percentage is 35%.</p>
   
-->
   
   
    </div>
    </div>
        </section>
        
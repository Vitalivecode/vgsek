        <section class="inner-banner">
            <div class="container">
                <ul class="list-unstyled thm-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#"><?=ucfirst($active);?></a></li>
                    <li class="active"><a href="#"><?=$department[0]->d_name;?></a></li>
                </ul><!-- /.list-unstyled -->
                <h2 class="inner-banner__title"><?=$department[0]->d_name;?></h2><!-- /.inner-banner__title -->
            </div><!-- /.container -->
        </section><!-- /.inner-banner -->
        
        <section class="about-one about-one__about-page tabs-section">
         <div class="container">
            <div class="row">
               <div class="col-sm-5 col-lg-3">
                  <ul class="nav nav-tabs flex-column mb-3">
                     <?php if(!empty($about) && $about != false){ ?>
                     <li class="nav-item">
                        <a class="nav-link active show" data-toggle="tab" href="#tab-1">About</a>
                     </li>
                     <?php } ?>
                     <?php if(!empty($hod_msg) && $hod_msg != false){ ?>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tab-2">HOD Message</a>
                     </li>
                     <?php } ?>
                     <?php if(!empty($mous) && $mous != false){ ?>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tab-3">MOUs</a>
                     </li>
                     <?php } ?>
                     <?php if(!empty($faculties) && $faculties != false){ ?>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tab-4">Faculty</a>
                     </li>
                     <?php } ?>
                     <?php if(!empty($courses) && $courses != false){ ?>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tab-5">Courses Offered</a>
                     </li>
                     <?php } ?>
                     <?php if(!empty($labs) && $labs != false){ ?>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tab-6">Laboratories</a>
                     </li>
                     <?php } ?>
                     <?php if(!empty($events_workshops) && $events_workshops != false){ ?>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tab-7">Events / Workshops</a>
                     </li>
                     <?php } ?>
                     <?php if(!empty($placements) && $placements != false){ ?>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tab-8">Placements / Internships</a>
                     </li>
                     <?php } ?>
                     <?php if(!empty($syllabus) && $syllabus != false){ ?>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tab-9">Syllabus</a>
                     </li>
                     <?php } ?>
                     <?php if(!empty($eresource) && $eresource != false){ ?>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tab-10">E-Resource</a>
                     </li>
                     <?php } ?>
                     <?php if(!empty($images) && $images != false){ ?>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tab-11">Image Gallery</a>
                     </li>
                     <?php } ?>
                     <?php if(!empty($faculty_achievements) && $faculty_achievements != false){ ?>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tab-12">Faculty Achievements</a>
                     </li>
                     <?php } ?>
                     <?php if(!empty($students_achievements) && $students_achievements != false){ ?>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tab-13">Students Achievements</a>
                     </li>
                     <?php } ?>
                <!--
                     <?php if(!empty($obe) && $obe != false){ ?>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tab-14">OBE - Outcome Based Education</a>
                     </li>
                     <?php } ?>
                -->
                  </ul>
               </div>
               <div class="col-sm-7 col-lg-9">
                  <div class="tab-content">
                    <?php if(!empty($about) && $about != false){ ?>
                    <div class="tab-pane active show" id="tab-1">
                        <?php if($about[0]->banner != ''){ ?>
                        <img src="<?=base_url('uploads/'.$about[0]->banner);?>" alt="" class="img-responsive" width="100%" />
                        <?php } ?>
                        <?php if($about[0]->description != ''){ ?>
                        <div class="mt-5"><?=$about[0]->description;?></div>
                        <?php } ?>        
                     </div>
                    <?php } ?>
                    <?php if(!empty($hod_msg) && $hod_msg != false){ ?>
                    <div class="tab-pane" id="tab-2">
                         <div class="row">
                            <?php if($hod_msg[0]->message != ''){ echo '<div class="col-lg-9 col-md-9 col-sm-12">'.$hod_msg[0]->message.'</div>'; ?><?php } ?>
                            <?php if($hod_msg[0]->hod != '' && $dis->faculty($hod_msg[0]->hod)){ $faculty = $dis->faculty($hod_msg[0]->hod); ?>
                             <div class="col-lg-3 col-md-3 col-sm-12 mb-4 mb-lg-0 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" style="animation-delay: 100ms;">
								
                                <div class="team-one__single">
                                    <div class="team-one__image">
                                        <img src="<?=base_url('uploads/'.$faculty[0]->photo);?>" alt="<?=$faculty[0]->name;?>" width="206px" height="206px">
                                    </div><!-- /.team-one__image -->
                                    <div class="team-one__content">
                                        <h2 class="team-one__name"><a href="#"><?=$faculty[0]->name;?></a></h2>
                                        <!-- /.team-one__name -->
                                        <p class="team-one__designation"><?=($faculty[0]->designation != '' && $dis->role($faculty[0]->designation))?$dis->role($faculty[0]->designation)[0]->role:'';?></p><!-- /.team-one__designation -->
                                        <!-- /.team-one__text -->
                                    </div><!-- /.team-one__content -->
                                    <div class="team-one__social">
                                        <a href="tel:9133245888"><i class="fas fa-phone"></i></a>
                                        <a href="mailto:vgse.civilhod@gmail.com"><i class="fas fa-envelope"></i></a>
                                    </div><!-- /.team-one__social -->
                                </div><!-- /.team-one__single -->

							</div>
							<?php } ?>
                         </div>

                     </div>
                    <?php } ?>
                    <?php if(!empty($mous) && $mous != false){ ?>
                    <div class="tab-pane" id="tab-3">
                        <?php foreach($mous as $mou){ ?>
                        <h4 class="upper mb-3"><?=$mou->title;?></h4>
                        <div class="row">
                            <div class="col-md-4">
                                <img src="<?=base_url('uploads/'.$mou->image);?>" class="img-responsive" width="100%" />
                            </div>
                            <div class="col-md-8">
                                <?=$mou->description;?>
                            </div>
                        </div>
                        <?php } ?>
                     </div>
                    <?php } ?>
                    <?php if(!empty($faculties) && $faculties != false){ ?>
                    <div class="tab-pane" id="tab-4">
                        <table class="table table-hover table-striped" style="width:100%">
                            <tbody>
                                <tr>
                                    <th>S.NO</th>
                                    <th>NAME</th>
                                    <th>DESIGNATION</th>
                                    <th>EXPERIENCE</th>
                                    <th>QUALIFICATION</th>
                                    <th>RESEARCH AREAs</th>
                                    <th>PHOTO</th>
                                </tr>
                                <?php $no=1; foreach($faculties as $facult){ $designation = ($facult->designation != '' && $dis->role($facult->designation))?$dis->role($facult->designation)[0]->role:''; ?>
                                <tr>
                                   <td><?=$no++;?></td>
                                   <td><?=$facult->name;?></td>
                                   <td><?=$designation;?></td>
                                   <td><?=$facult->experience;?> Years</td>
                                   <td><?=$facult->qualification;?></td>
                                   <td><?=$facult->research_area;?></td>
                                  <td><img src="<?=base_url('uploads/'.$facult->photo);?>" class="faculty-img img-responsive" width="80px"></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                     </div>
                    <?php } ?>
                    <?php if(!empty($courses) && $courses != false){ ?>
                    <div class="tab-pane" id="tab-5">
                        <div class="row">
                            <?php foreach($courses as $course){ ?>
                            <div class="col-lg-6">
                                <div class="course-one__single">
                                    <div class="course-one__content">
                                        <a href="#" class="course-one__category"><?=$department[0]->d_name;?></a><!-- /.course-one__category -->
                                        <h2 class="course-one__title"><a href="#"><?=$course->course_name;?></a></h2>
                                        <!-- /.course-one__title -->
                                        <div class="course-one__meta">
                                            <ul class="course">
                                                <li><i class="far fa-clock"></i> <strong>Duration:</strong> <?=$course->duration;?></li>
                                                <li><i class="fas fa-user-graduate"></i> <strong>Intake:</strong> <?=$course->intake;?></li>
                                                <li><i class="far fa-folder-open"></i> <strong>Eligibility Criteria:</strong><br>
                                                    <?=$course->eligibility_criteria;?>
                                                </li>
                                            </ul>
                                        </div><!-- /.course-one__meta -->
        
                                    </div><!-- /.course-one__content -->
                                </div><!-- /.course-one__single -->
                            </div><!-- /.col-lg-6 -->
                            <?php } ?>
                        </div><!-- /.row -->
                     </div>
                    <?php } ?>
                    <?php if(!empty($labs) && $labs != false){ ?>
                    <div class="tab-pane" id="tab-6">
                        <?php foreach($labs as $lab){ ?>
                        <h4 class="upper mb-3 mt-5"><?=$lab->lab_name;?></h4>
                        <?=$lab->description;?>
                        <div class="row">
                            <?php if($lab->image_1 != ''){ ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="gallery-one__single">
                                    <img src="<?=base_url('uploads/'.$lab->image_1);?>" alt="<?=$lab->lab_name;?>">
                                    <a href="<?=base_url('uploads/'.$lab->image_1);?>" class="gallery-one__popup img-popup"><i class="kipso-icon-plus-symbol"></i></a>
                                </div><!-- /.gallery-one__single -->
                            </div><!-- /.col-lg-4 -->
                            <?php } ?>
                            <?php if($lab->image_2 != ''){ ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="gallery-one__single">
                                    <img src="<?=base_url('uploads/'.$lab->image_2);?>" alt="<?=$lab->lab_name;?>">
                                    <a href="<?=base_url('uploads/'.$lab->image_2);?>" class="gallery-one__popup img-popup"><i class="kipso-icon-plus-symbol"></i></a>
                                </div><!-- /.gallery-one__single -->
                            </div><!-- /.col-lg-4 -->
                            <?php } ?>
                            <?php if($lab->image_3 != ''){ ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="gallery-one__single">
                                    <img src="<?=base_url('uploads/'.$lab->image_3);?>" alt="<?=$lab->lab_name;?>">
                                    <a href="<?=base_url('uploads/'.$lab->image_3);?>" class="gallery-one__popup img-popup"><i class="kipso-icon-plus-symbol"></i></a>
                                </div><!-- /.gallery-one__single -->
                            </div><!-- /.col-lg-4 -->
                            <?php } ?>
                        </div>
                        <?php } ?>
                     </div>
                    <?php } ?>
                    <?php if(!empty($events_workshops) && $events_workshops != false){ ?>
                    <div class="tab-pane" id="tab-7">
                        <div class="row">
                            <?php foreach($events_workshops as $events){ ?>
                            <div class="col-lg-6">
                                <div class="course-one__single">
                                    <div class="course-one__content">
                                        <a href="#" class="course-one__category"><?=$department[0]->d_name;?></a><!-- /.course-one__category -->
                                        <h5 class="course-one__title"><a href="#"><?=$events->event_name;?></a></h5>
                                        <!-- /.course-one__title -->
                                        <div class="course-one__meta">
                                            <ul class="course">
                                                <li><i class="far fa-clock"></i> <strong>From:</strong> <?=date('d M Y', strtotime($events->from_date));?></li>
                                                <li><i class="far fa-clock"></i> <strong>To:</strong> <?=date('d M Y', strtotime($events->to_date));?></li>
                                                <li><i class="far fa-file"></i> <strong>Details:</strong><br>
                                                    <?=$events->details;?>
                                                </li>
                                            </ul>
                                        </div><!-- /.course-one__meta -->
        
                                    </div><!-- /.course-one__content -->
                                </div><!-- /.course-one__single -->
                            </div><!-- /.col-lg-6 -->
                            <?php } ?>
                        </div><!-- /.row -->
                    </div>
                    <?php } ?>
                    <?php if(!empty($placements) && $placements != false){ ?>
                    <div class="tab-pane" id="tab-8">
                        <h4 class="upper mb-3 mt-5">Placements and Internships</h4>
                        <p>The Department has maintained good placement record in recent years. Many of the Department students are doing internship in various Construction/Road and Buildings/Water supply and Quality Control departments also students are employed at prestigious organizations in India and abroad. Many students get a choice of jobs. The Department also arranges campus interviews.</p>
                         
                     </div>
                    <?php } ?>
                    <?php if(!empty($syllabus) && $syllabus != false){ ?>
                    <div class="tab-pane" id="tab-9">
                        <h4 class="upper mb-3 mt-5">Syllabus</h4>
                            <?php foreach($syllabus as $syllab){ ?>
                            <div class="course-details__list-item">
                                <div class="course-details__list-img eresource-icon mr-2">
                                    <i class="fas fa-paperclip fa-2x"></i>
                                </div><!-- /.course-details__list-img -->
                                <div class="course-details__list-content">
                                    <h4><?=$syllab->education_level;?> - <?=$syllab->title;?> <a href="<?=base_url('uploads/'.$syllab->attachment);?>" target="_blank" class="btn btn-primary">Click here to download Pdf</a></h4>
                                </div><!-- /.course-details__list-content -->
                            </div><!-- /.course-details__list-item -->
                            <?php } ?>
                     </div>
                    <?php } ?>
                    <?php if(!empty($eresource) && $eresource != false){ ?>
                    <div class="tab-pane" id="tab-10">
                        <div class="course-details__list">
                            <h2 class="course-details__list-title">E-Resources</h2>
                            <?php foreach($eresource as $resource){ ?>
                            <div class="course-details__list-item">
                                <div class="course-details__list-img eresource-icon mr-2">
                                    <i class="fas fa-paperclip fa-2x"></i>
                                </div><!-- /.course-details__list-img -->
                                <div class="course-details__list-content">
                                    <h3><a href="http://www.<?=$resource->url;?>" target="_blank" ><?=$resource->eresource_title;?></a></h3>
                                </div><!-- /.course-details__list-content -->
                            </div>
                            <?php } ?>
                        </div>
                     </div>
                    <?php } ?>
                    <?php if(!empty($images) && $images != false){ ?>
                    <div class="tab-pane" id="tab-11">
                        <div class="row">
                            <?php foreach($images as $image){ ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="gallery-one__single">
                                    <img src="<?=base_url('uploads/'.$image->image);?>" alt="<?=$title;?>">
                                    <a href="<?=base_url('uploads/'.$image->image);?>" class="gallery-one__popup img-popup"><i class="kipso-icon-plus-symbol"></i></a>
                                </div><!-- /.gallery-one__single -->
                            </div><!-- /.col-lg-4 -->
                            <?php } ?>
                        </div>
                    </div>
                    <?php } ?>
                    <?php if(!empty($faculty_achievements) && $faculty_achievements != false){ ?>
                    <div class="tab-pane" id="tab-12">
                        <div class="row">
                            <?php foreach($faculty_achievements as $faculty_achievement){ ?>
                            <div class="col-lg-6">
                                <div class="blog-one__single">
                                    <div class="blog-one__image">
                                        <img src="<?=base_url('uploads/'.$faculty_achievement->image);?>" alt="">
                                        <a class="blog-one__plus" href="#"><i class="kipso-icon-plus-symbol"></i></a>
                                    </div>
                                    <div class="blog-one__content text-center">
                                        <h2 class="blog-one__title"><a href="#"><?=$faculty_achievement->title;?></a></h2>
                                        <?=$faculty_achievement->content;?>
                                        <a href="#" class="blog-one__link">Achievements PDF</a>
                                    </div><!-- /.blog-one__content -->
                                </div><!-- /.blog-one__single -->
                            </div><!-- /.col-lg-6 -->
                            <?php } ?>
                        </div>
                     </div>
                    <?php } ?>
                    <?php if(!empty($students_achievements) && $students_achievements != false){ ?>
                    <div class="tab-pane" id="tab-13">
                        <div class="row">
                            <?php foreach($students_achievements as $students_achievement){ ?>
                            <div class="col-lg-6">
                                <div class="blog-one__single">
                                    <div class="blog-one__image">
                                        <img src="<?=base_url('uploads/'.$students_achievement->image);?>" alt="">
                                        <a class="blog-one__plus" href="#"><i class="kipso-icon-plus-symbol"></i></a>
                                    </div>
                                    <div class="blog-one__content text-center">
                                        <h2 class="blog-one__title"><a href="#"><?=$students_achievement->title;?></a></h2>
                                        <?=$students_achievement->content;?>
                                        <a href="#" class="blog-one__link">Achievements PDF</a>
                                    </div><!-- /.blog-one__content -->
                                </div><!-- /.blog-one__single -->
                            </div><!-- /.col-lg-6 -->
                            <?php } ?>
                        </div>
                     </div>
                    <?php } ?>
                    
                <!--
                    <?php if(!empty($obe) && $obe != false){ ?>
                    <div class="tab-pane" id="tab-14">
                        <h4 class="upper mb-3 mt-5">Programe Outcomes</h4>
                            <h6>PO 1</h6>
                            <p><strong>Engineering knowledge: </strong>Apply the knowledge of mathematics, science, engineering fundamentals and engineering specialization to the solution of complex engineering problems.</p>
                            <h6>PO 2</h6>
                            <p><strong>Problem analysis: </strong>Identify, formulate, review research literature and analyze complex engineering problems reaching substantiated conclusions using first principles of mathematics, natural sciences and engineering sciences.</p>
                           <h6>PO 3</h6>
                           <p><strong>Design/development of solutions: </strong>Design solutions for complex engineering problems and design system components or processes that meet the specified needs with appropriate consideration for the public health and safety, cultural, societal and environmental considerations.</p>
                           <h6>PO 4</h6>
                           <p><strong>Conduct investigations of complex problems: </strong>Use research-based knowledge and research methods including design of experiments, analysis and interpretation of data and synthesis of the information to provide valid conclusions.</p>
                           <h6>PO 5</h6>
                           <p><strong>Modern tool usage: </strong> Create, select, apply appropriate techniques, resources, modern engineering, IT tools including prediction and modeling to complex engineering activities with an understanding of the limitations.</p>
                           <h6>PO 6</h6>
                           <p><strong>The engineer and society: </strong>Apply reasoning informed by the contextual knowledge to assess societal, health, safety, legal, cultural issues and consequent responsibilities relevant to the professional engineering practice</p>
                           <h4 style="text-align:center;">PROGRAME EDUCATIONAL OBJECTIVES (PEO’s)</h4>
                           <p>We have program educational objectives for our Civil Engineering Program. Program educational objectives are broad statements that describe the career and professional accomplishments that the program is preparing graduates to achieve.</p>
                           <h6>PEO2:</h6>
                           <p>Graduates will adopt to the modern engineering tools for planning, design, execution and maintenance of works with sustainable development in their profession.</p>
                           <h6>PEO3:</h6>
                           <p>Graduates will exhibit professionalism, ethical attitude, communication and managerial skills, team work and social responsibility in their profession and adapt to current trends by engaging in lifelong learning.</p>
                           <h6>PEO4:</h6>
                           <p>Excel in their professional career and higher education in their related fiel</p>
                           <h6>PEO5:</h6>
                           <p>Exhibit professionalism through leadership, communication skills and team work.</p>
                           <h6>PEO6:</h6>
                           <p>Adapt to emerging trends for sustained growth and exhibit social responsibility and professional ethics.</p>
                           <h4 style="text-align:center;">PROGRAME SPECIFIC OUTCOMES</h4>
                           <h6>PSO 1</h6>
                           <p>Graduates will have an ability to design components of diverse civil structures like buildings, roads, bridges, hydraulic structures etc.,</p>
                           <h6>PSO 2</h6>
                           <p>Graduates will have an ability to understand the materials and processes involved in various domains of civil engineering.</p>
                     </div>
                    <?php } ?>
                -->
                
                  </div>
               </div>
            </div>
         </div>
      </section>
        
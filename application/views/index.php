
    <div class="row">
        <div class="col-md-9 no-padding">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="<?=base_url('uploads/slider/slider-01.png');?>" alt="" style="max-height:616px">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="<?=base_url('uploads/slider/slider-02.png');?>" alt="" style="max-height:616px">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="<?=base_url('uploads/slider/slider-03.png');?>" alt="" style="max-height:616px">
                </div>
              </div>
                <div class="banner-carousel-btn">
                  <a class="carousel-control-prev banner-carousel-btn__left-btn" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <i class="kipso-icon-left-arrow"></i>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next banner-carousel-btn__right-btn" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <i class="kipso-icon-right-arrow"></i>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 no-padding" style="background: #2da397;">
            <h2 class="block-title__title whats_new" style="color:#fff !important;">What's New</h2><!-- /.block-title__title -->
			<div class="notice-board">
				<marquee direction="up" onMouseOver="stop();" onMouseOut="start();" height="400px">
					<ul class="list-unstyled footer-widget__course-list">
					    <?php if($notifications != false){ foreach($notifications as $notification){ if($notification->noti_type == 'announcments'){ ?>
						    <li><a class="text-white" href="<?=($notification->url != '' && $notification->url != '#')?'https://'.$notification->url:'#';?>" <?=($notification->url != '' && $notification->url != '#')?'target="_blank"':'';?>><img src="<?=base_url('assets/images/new.gif');?>" width="50px" /> <?=$notification->title;?></a></li>
						<?php } } } ?>
					</ul><!-- /.footer-widget__course-list -->
				</marquee>
				<div class="text-center mt-4"><a href="#" class="btn btn-danger">Read All Notifications</a></div>
            </div><!-- /.block-title -->
        </div>
    </div>

        
        <section class="about-two">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-two__content">
                            <div class="block-title text-left">
                                <h2 class="block-title__title">Welcome to <span class="text-vgsek"> Vaageswari</span></h2><!-- /.block-title__title -->
                            </div><!-- /.block-title -->
                            <p class="about-two__text">Over the years, we have evolved as a symbol of quality education. The determination and dedicated efforts of Vaageswari colleges in the interest of the students to compete with the best in the outside world have enabled us to shine forth as the torchbearer for quality education today. Vaageswari colleges keep pace with the world's major strides in technology and development and hence set a benchmark in every pedagogical standard.</p><!-- /.about-two__text -->
                            <div class="about-two__single-wrap">
                                <div class="about-two__single">
                                    <div class="about-two__single-icon">
                                        <i class="kipso-icon-professor"></i><!-- /.kipso-icon-professor -->
                                    </div><!-- /.about-two__single-icon -->
                                    <div class="about-two__single-content">
                                        <p class="about-two__single-text">Start learning from
                                            our experts</p><!-- /.about-two__single-text -->
                                    </div><!-- /.about-two__single-content -->
                                </div><!-- /.about-two__single -->
                                <div class="about-two__single">
                                    <div class="about-two__single-icon">
                                        <i class="kipso-icon-knowledge"></i><!-- /.kipso-icon-professor -->
                                    </div><!-- /.about-two__single-icon -->
                                    <div class="about-two__single-content">
                                        <p class="about-two__single-text">Enhance your skills
                                            with us now</p><!-- /.about-two__single-text -->
                                    </div><!-- /.about-two__single-content -->
                                </div><!-- /.about-two__single -->
                            </div><!-- /.about-two__single-wrap -->
                            <a href="<?=base_url('about');?>" class="thm-btn">Learn More</a><!-- /.thm-btn -->
                        </div><!-- /.about-two__content -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-xl-6 d-flex justify-content-xl-end justify-content-sm-center">
                        <div class="about-two__image">
                            <span class="about-two__image-dots"></span><!-- /.about-two__image-dots -->
                            <img src="assets/images/about-1-1.jpg" alt="">
                            <div class="about-two__count">
                                <div class="about-two__count-text">Trusted by
                                    <span class="counter">4890</span></div><!-- /.about-two__count-text -->
                            </div><!-- /.about-two__count -->
                        </div><!-- /.about-two__image -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.about-two -->
        
        <section class="video-two">
            <div class="container">
                <img src="assets/images/scratch-1-1.png" class="video-one__scratch" alt="">
                <div class="row">
                    <div class="col-lg-6 d-flex align-items-end">
                        <div class="video-one__content">
                            <h2 class="video-two__title">VGSEK one & only <br>
                                mission is to extend <br>
                                your knowledge base</h2><!-- /.video-two__title -->
                            <a href="#" class="thm-btn video-one__btn">Learn More</a><!-- /.thm-btn -->
                        </div><!-- /.video-one__content -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="video-one__img">
                            <img src="assets/images/video-1-1.jpg" alt="">
                            <a href="#" class="video-one__popup"><i class="fas fa-play"></i><!-- /.fas fa-play --></a>
                        </div><!-- /.video-one__img -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.video-one -->
        <section class="thm-gray-bg course-category-one">
            <img src="assets/images/circle-stripe.png" class="course-category-three__circle" alt="">
            <div class="container text-center">
                <div class="block-title text-center">
                    <h2 class="block-title__title">Our Departments</h2><!-- /.block-title__title -->
                </div><!-- /.block-title -->
				
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="course-category-three__single">
                            <a href="<?=base_url('departments/page/3');?>"><img src="assets/images/departments/cse.jpg" alt="CSE" class="img-responsive"></a>
                            <div class="course-category-three__content">
                                <h3 class="course-category-three__title"><a href="<?=base_url('departments/page/3');?>">CSE</a></h3>
                                <!-- /.course-category-three__title -->
                                <!--<p class="course-category-three__text">Over 752 Students</p>-->
                                <!-- /.course-category-three__text -->
                            </div><!-- /.course-category-three__content -->
                        </div><!-- /.course-category-three__single -->
                    </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="course-category-three__single">
                            <a href="<?=base_url('departments/page/2');?>"><img src="assets/images/departments/cse(ai&ml).jpeg" alt="CSE(AI & ML)" class="img-responsive"></a>
                            <div class="course-category-three__content">
                                <h3 class="course-category-three__title"><a href="<?=base_url('departments/page/2');?>">CSE(AI & ML)</a></h3>
                                <!-- /.course-category-three__title -->
                                <!--<p class="course-category-three__text">Over 752 Students</p>-->
                                <!-- /.course-category-three__text -->
                            </div><!-- /.course-category-three__content -->
                        </div><!-- /.course-category-three__single -->
                    </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="course-category-three__single">
                            <a href="<?=base_url('departments/page/22');?>"><img src="assets/images/departments/cse(datascience).jpeg" alt="CSE(Data Science )" class="img-responsive"></a>
                            <div class="course-category-three__content">
                                <h3 class="course-category-three__title"><a href="<?=base_url('departments/page/22');?>">CSE(Data Science )</a></h3>
                                <!-- /.course-category-three__title -->
                                <!--<p class="course-category-three__text">Over 752 Students</p>-->
                                <!-- /.course-category-three__text -->
                            </div><!-- /.course-category-three__content -->
                        </div><!-- /.course-category-three__single -->
                    </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="course-category-three__single">
                            <a href="<?=base_url('departments/page/4');?>"><img src="assets/images/departments/ece.jpg" alt="ECE" class="img-responsive"></a>
                            <div class="course-category-three__content">
                                <h3 class="course-category-three__title"><a href="<?=base_url('departments/page/4');?>">ECE</a></h3>
                                <!-- /.course-category-three__title -->
                                <!--<p class="course-category-three__text">Over 752 Students</p>-->
                                <!-- /.course-category-three__text -->
                            </div><!-- /.course-category-three__content -->
                        </div><!-- /.course-category-three__single -->
                    </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="course-category-three__single">
                            <a href="<?=base_url('departments/page/5');?>"><img src="assets/images/departments/eee.jpg" alt="EEE" class="img-responsive"></a>
                            <div class="course-category-three__content">
                                <h3 class="course-category-three__title"><a href="<?=base_url('departments/page/5');?>">EEE</a></h3>
                                <!-- /.course-category-three__title -->
                                <!--<p class="course-category-three__text">Over 752 Students</p>-->
                                <!-- /.course-category-three__text -->
                            </div><!-- /.course-category-three__content -->
                        </div><!-- /.course-category-three__single -->
                    </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="course-category-three__single">
                            <a href="<?=base_url('departments/page/1');?>"><img src="assets/images/departments/civil.jpg" alt="Civil" class="img-responsive"></a>
                            <div class="course-category-three__content">
                                <h3 class="course-category-three__title"><a href="<?=base_url('departments/page/1');?>">Civil</a></h3>
                                <!-- /.course-category-three__title -->
                                <!--<p class="course-category-three__text">Over 752 Students</p>-->
                                <!-- /.course-category-three__text -->
                            </div><!-- /.course-category-three__content -->
                        </div><!-- /.course-category-three__single -->
                    </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="course-category-three__single">
                            <a href="<?=base_url('departments/page/6');?>"><img src="assets/images/departments/mech.jpg" alt="Mechanical" class="img-responsive"></a>
                            <div class="course-category-three__content">
                                <h3 class="course-category-three__title"><a href="<?=base_url('departments/page/6');?>">Mechanical</a></h3>
                                <!-- /.course-category-three__title -->
                                <!--<p class="course-category-three__text">Over 752 Students</p>-->
                                <!-- /.course-category-three__text -->
                            </div><!-- /.course-category-three__content -->
                        </div><!-- /.course-category-three__single -->
                    </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section><!-- /.thm-gray-bg course-category-one -->
        <section class="cta-three">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 clearfix">
						<div class="cta-three__content block-title text-left">
                                <h2 class="block-title__title">Notice Board</h2><!-- /.block-title__title -->
							<div class="notice-board" style="background:#f1f1f1; margin-top:20px;">
								<div class="" style="background:#f1f1f1; padding: 15px;">
								<marquee direction="up" onMouseOver="stop();" onMouseOut="start();" height="450px">
									<ul class="list-unstyled footer-widget__course-list">
									    <?php if($notifications != false){ foreach($notifications as $notification){ if($notification->noti_type == 'announcments'){ ?>
										    <li><h2><a href="<?=($notification->url != '' && $notification->url != '#')?'https://'.$notification->url:'#';?>" <?=($notification->url != '' && $notification->url != '#')?'target="_blank"':'';?>><img src="<?=base_url('assets/images/new.gif');?>" width="50px" /> <?=$notification->title;?></a></h2></li>
										<?php } } } ?>
									</ul><!-- /.footer-widget__course-list -->
								</marquee>
								<a href="#">View All Notifications</a>
								</div>
                            </div><!-- /.block-title -->
						</div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="cta-three__content">
                            <div class="block-title text-left">
                                <h2 class="block-title__title">Benefits of learning
                                    at Vaageswari</h2><!-- /.block-title__title -->
                            </div><!-- /.block-title -->
                            <p class="cta-three__text">There cursus massa at urnaaculis estie. Sed aliquamellus vitae ultrs
                                condmentum leo massa mollis estiegittis miristum nulla sed medy fringilla vitae.</p>
                            <!-- /.cta-three__text -->
                            <div class="cta-three__single-wrap">
                                <div class="cta-three__single">
                                    <i class="kipso-icon-strategy"></i><!-- /.kipso-icon-strategy -->
                                    <p class="cta-three__single-text">Professional
                                        Training</p><!-- /.cta-three__single-text -->
                                </div><!-- /.cta-three__single -->
                                <div class="cta-three__single">
                                    <i class="kipso-icon-training"></i><!-- /.kipso-icon-training -->
                                    <p class="cta-three__single-text">Live
                                        Learning</p><!-- /.cta-three__single-text -->
                                </div><!-- /.cta-three__single -->
                                <div class="cta-three__single">
                                    <i class="kipso-icon-human-resources"></i><!-- /.kipso-icon-human-resources -->
                                    <p class="cta-three__single-text">Expert
                                        Teachers</p><!-- /.cta-three__single-text -->
                                </div><!-- /.cta-three__single -->
                            </div><!-- /.cta-three__single-wrap -->
                            <a href="#" class="thm-btn">Learn More</a><!-- /.thm-btn -->
                        </div><!-- /.cta-three__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.cta-three -->
        <?php if($companies != false){ ?>
        <section class="brand-two ">
            <div class="container">
                <div class="block-title">
                    <h2 class="block-title__title">Companies</h2><!-- /.block-title__title -->
                </div><!-- /.block-title -->
                <div class="brand-one__carousel owl-carousel owl-theme">
                    <?php foreach($companies as $company){ ?>
                    <div class="item">
                        <img src="<?=base_url('uploads/'.$company->logo);?>" alt="<?=$company->company_name;?>" height="100px">
                    </div><!-- /.item -->
                    <?php } ?>
                </div><!-- /.brand-one__carousel owl-carousel owl-theme -->
            </div><!-- /.container -->
        </section><!-- /.brand-one -->
        <?php } ?>
        <?php if($events_articles != false){ ?>
        <section class="blog-two">
            <div class="container">
                <div class="block-title text-center">
                    <h2 class="block-title__title">Our latest events <br>
                        & articles</h2><!-- /.block-title__title -->
                </div><!-- /.block-title -->
                <div class="blog-two__carousel owl-carousel owl-theme">
                    <?php foreach($events_articles as $events){ ?>
                    <div class="item">
                        <div class="blog-two__single" style="background-image: url(assets/images/blog-2-1.jpg);">
                            <div class="blog-two__inner">
                                <a href="#" class="blog-two__date">
                                    <span><?=date('d', strtotime($events->date));?></span>
                                    <?=date('M', strtotime($events->date));?>
                                </a><!-- /.blog-two__date -->
                                <div class="blog-two__meta">
                                    <a href="javascript:void(0);">by Admin</a>
                                </div><!-- /.blog-two__meta -->
                                <h3 class="blog-two__title">
                                    <a href="<?=($events->url != '')?$events->url:'javascript:void(0);';?>"><?=$events->title;?></a>
                                </h3><!-- /.blog-two__title -->
                            </div><!-- /.blog-two__inner -->
                        </div><!-- /.blog-two__single -->
                    </div><!-- /.item -->
                    <?php } ?>
                </div><!-- /.blog-two__carousel owl-carousel owl-theme -->
            </div><!-- /.container -->
        </section><!-- /.blog-one blog-page -->
        <?php } ?>
        <?php if($testimonials != false){ ?>
        <section class="testimonials-one">
            <div class="container">
                <div class="block-title text-center">
                    <h2 class="block-title__title">What our students <br>
                        have to say</h2><!-- /.block-title__title -->
                </div><!-- /.block-title -->
                <div class="testimonials-one__carousel owl-carousel owl-theme">
                    <?php foreach($testimonials as $testimonial){ ?>
                    <div class="item">
                        <div class="testimonials-one__single">
                            <div class="testimonials-one__qoute">
                                <img src="<?=base_url('assets/images/qoute-1-1.png');?>" alt="<?=$testimonial->name;?>">
                            </div><!-- /.testimonials-one__qoute -->
                            <p class="testimonials-one__text"><?=$testimonial->testimonial;?></p><!-- /.testimonials-one__text -->
                            <img src="<?=base_url('uploads/'.$testimonial->t_image);?>" alt="<?=$testimonial->name;?>" class="testimonials-one__img">
                            <h3 class="testimonials-one__name"><?=$testimonial->name;?></h3><!-- /.testimonials-one__name -->
                            <p class="testimonials-one__designation"><?=$testimonial->role;?></p><!-- /.testimonials-one__designation -->
                        </div><!-- /.testimonials-one__single -->
                    </div><!-- /.item -->
                    <?php } ?>
                </div><!-- /.testimonials-one__carousel owl-carousel owl-theme -->
            </div><!-- /.container -->
        </section><!-- /.testimonials-one -->
        <?php } ?>
        
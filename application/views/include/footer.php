        <div id="BaseUri" data-url="<?=base_url();?>"></div>
	    <div id="ajaxMessage"></div>
        <footer class="site-footer">
            <div class="site-footer__upper">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-sm-12">
                            <div class="footer-widget footer-widget__contact" style="padding-top: 60px;padding-bottom: 60px;">
                                <h2 class="footer-widget__title">Courses</h2><!-- /.footer-widget__title -->
                                <ul class="list-unstyled footer-widget__course-list">
                                    <li><h2><a href="<?=base_url('departments/page/3');?>">Computer Science & Engineering</a></h2></li>
                                    <li><h2><a href="<?=base_url('departments/page/2');?>">Computer Science & Engineering (AI & ML)</a></h2></li>
                                    <li><h2><a href="<?=base_url('departments/page/22');?>">Computer Science & Engineering (Data Science)</a></h2></li>
                                    <li><h2><a href="<?=base_url('departments/page/4');?>">Electronics & Communication Engineering</a></h2></li>
                                    <li><h2><a href="<?=base_url('departments/page/5');?>">Electrical & Electronics Engineering</a></h2></li>
                                    <li><h2><a href="<?=base_url('departments/page/1');?>">Civil Engineering</a></h2></li>
                                    <li><h2><a href="<?=base_url('departments/page/6');?>">Mechanical Engineering</a></h2></li>
                                </ul><!-- /.footer-widget__course-list -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 -->
                        <div class="col-xl-2 col-lg-6 col-sm-12">
                            <div class="footer-widget footer-widget__link" style="padding-top: 60px;padding-bottom: 60px;">
                                <h2 class="footer-widget__title">Explore</h2><!-- /.footer-widget__title -->
                                <div class="footer-widget__link-wrap">
                                    <ul class="list-unstyled footer-widget__link-list">
                                        <li><a href="<?=base_url('about');?>">About</a></li>
                                        <li><a href="<?=base_url('alumni');?>">Alumni</a></li>
                                        <li><a href="<?=base_url('academic-regulations');?>">Academics</a></li>
                                        <li><a href="<?=base_url('amenities');?>">Amenities</a></li>
                                        <li><a href="<?=base_url('activities');?>">Activities</a></li>
                                        <li><a href="<?=base_url('administration');?>">Administration</a></li>
                                        <li><a href="<?=base_url('contact');?>">Contact</a></li>
                                    </ul>
                                    <!--<ul class="list-unstyled footer-widget__link-list">-->
                                    <!--    <li><a href="#">Exam Section</a></li>-->
                                    <!--    <li><a href="#">Research</a></li>-->
                                    <!--    <li><a href="#">Student Corner</a></li>-->
                                    <!--</ul>-->
                                </div><!-- /.footer-widget__link-wrap -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 -->
                        <div class="col-xl-3 col-lg-6 col-sm-12">
                            <div class="footer-widget footer-widget__gallery" style="padding-top: 60px;padding-bottom: 60px;">
                                <img src="<?=base_url('assets/images/companies/footer-logos.png');?>" alt="">
                                <!--
                                <ul class="logo-list-line list-unstyled footer-widget__gallery-list">
                                    <li><a href="#"><img src="<?=base_url('assets/images/companies/nirf-logo.jpg');?>" alt=""></a></li>
                                    <li><a href="#"><img src="<?=base_url('assets/images/companies/ariia-logo.jpg');?>" alt=""></a></li>
                                    <li><a href="#"><img src="<?=base_url('assets/images/companies/iqac-logo.jpg');?>" alt=""></a></li>
                                </ul>   -->
                                <!-- /.footer-widget__gallery -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 -->
                        <div class="col-xl-3 col-lg-6 col-sm-12">
                            <div class="footer-widget footer-widget__about" style="padding-top: 60px;padding-bottom: 60px;">
                                <h2 class="footer-widget__title">About</h2><!-- /.footer-widget__title -->
                                <p class="footer-widget__text">The society was established by an eminent and educated personalities in the name of Goddess Saraswathi Devi, Sree Vaageswari Educational Society during the year 2003 under the leader ship of General Secretary Dr.G.Sreenivas Reddy Garu.</p><!-- /.footer-widget__text -->
                                
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.site-footer__upper -->
            <div class="site-footer__bottom">
                <div class="container">
                    <p class="site-footer__copy">&copy; Copyright <?php echo date('Y'); ?> <a href="#"><?=$site[0]->title;?>.</a>&nbsp;&nbsp;
                        <img src="https://hitwebcounter.com/counter/counter.php?page=7995869&style=0001&nbdigits=7&type=page&initCount=41006" title="<?=$site[0]->title;?>" Alt="<?=$site[0]->title;?>" border="0" />
                    </p>
                    <div class="site-footer__social">
                        <a href="#" data-target="html" class="scroll-to-target site-footer__scroll-top"><i class="kipso-icon-top-arrow"></i></a>
                        <?php $contact = $this->get->table('contact', array('status' => '1')); ?>
                        <?php if($contact != false && $contact[0]->twitter != ''){ ?>
                            <a href="<?=$contact[0]->twitter;?>"><i class="fab fa-twitter"></i></a>
                        <?php } ?>
                        <?php if($contact != false && $contact[0]->facebook != ''){ ?>
                            <a href="<?=$contact[0]->facebook;?>"><i class="fab fa-facebook-square"></i></a>
                        <?php } ?>
                        <?php if($contact != false && $contact[0]->youtube != ''){ ?>
                            <a href="<?=$contact[0]->youtube;?>"><i class="fab fa-youtube"></i></a>
                        <?php } ?>
                        <?php if($contact != false && $contact[0]->instagram != ''){ ?>
                            <a href="<?=$contact[0]->instagram;?>"><i class="fab fa-instagram"></i></a>
                        <?php } ?>
                    </div><!-- /.site-footer__social -->
                    <!-- /.site-footer__copy -->
                </div><!-- /.container -->
            </div><!-- /.site-footer__bottom -->
        </footer><!-- /.site-footer -->

    </div><!-- /.page-wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.search-popup__overlay -->
        <div class="search-popup__inner">
            <form action="#" class="search-popup__form">
                <input type="text" name="search" placeholder="Type here to Search....">
                <button type="submit"><i class="kipso-icon-magnifying-glass"></i></button>
            </form>
        </div><!-- /.search-popup__inner -->
    </div><!-- /.search-popup -->
    <script src="<?=base_url('assets/js/jquery.min.js');?>"></script>
    <script src="<?=base_url('assets/js/bootstrap.bundle.min.js');?>"></script>
    <script src="<?=base_url('assets/js/owl.carousel.min.js');?>"></script>
    <script src="<?=base_url('assets/js/waypoints.min.js');?>"></script>
    <script src="<?=base_url('assets/js/jquery.counterup.min.js');?>"></script>
    <script src="<?=base_url('assets/js/TweenMax.min.js');?>"></script>
    <script src="<?=base_url('assets/js/wow.js');?>"></script>
    <script src="<?=base_url('assets/js/jquery.magnific-popup.min.js');?>"></script>
    <script src="<?=base_url('assets/js/countdown.min.js');?>"></script>
    <script src="<?=base_url('assets/js/vegas.min.js');?>"></script>
    <!-- template scripts -->
    <script src="<?=base_url('assets/js/theme.js');?>"></script>
    <!--    Verticle Tabs    -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <?php if($this->session->flashdata('alertMessage')) { ?>
    	<script type="text/javascript">
    		$(document).ready(function() {
    		    swal({
                    icon: '<?=$this->session->flashdata('alertMessage')['status'];?>',
                    title: '<?=$this->session->flashdata('alertMessage')['title'];?>',
                    text: '<?=$this->session->flashdata('alertMessage')['message'];?>',
                    button: false,
                    timer: 1500
                });
    		});
    	</script>
    <?php } ?>
    <script type="text/javascript">
        <?php if((end($this->uri->segment_array()) === 'naac' ) || (end($this->uri->segment_array()) === 'iqac' )) { ?>
            if(localStorage.getItem('protect') !== 'true')
                window.location.href = baseUrl;
        <?php } else{ ?>
            localStorage.setItem('protect', 'false');
        <?php } ?>
    </script>
</body>
</html>
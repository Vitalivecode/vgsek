<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url('uploads/'.$site[0]->favicon);?>">
    <title><?=$title;?></title>
    <!-- Custom CSS --><!-- plugin scripts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,500i,600,700,800%7CSatisfy&display=swap">
    <link rel="stylesheet" href="<?=base_url('assets/css/animate.min.css');?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/owl.carousel.min.css');?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/owl.theme.default.min.css');?>">
    <link rel="stylesheet" href="<?=base_url('assets/plugins/fontawesome-free-5.11.2-web/css/all.min.css');?>">
    <link rel="stylesheet" href="<?=base_url('assets/plugins/kipso-icons/style.css');?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/magnific-popup.css');?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/vegas.min.css');?>">
    <!-- template styles -->
    <link rel="stylesheet" href="<?=base_url('assets/css/style.css');?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/shashi.css');?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/responsive.css');?>">
    <?php if(isset($css) && $css != NULL){ 
	    foreach($css as $cs){
		    echo '<link href="'.$cs.'" rel="stylesheet" type="text/css" />';
		}
	} ?>
</head>
<body>
    <div class="preloader"><span></span></div><!-- /.preloader -->
    <div class="page-wrapper">
        <div class="topbar-one">
            <div class="container">
                <div class="topbar-one__left">
                    <a href="mailto:info@vgsek.ac.in"><i class="fa fa-envelope"></i> info@vgsek.ac.in</a>
                    <a href="tel:+91-9502588609"><i class="fa fa-phone-alt"></i> +91-9502588609</a>
                    <a href="tel:+91-9701542244"><i class="fa fa-phone-alt"></i> +91-9701542244</a>
                </div><!-- /.topbar-one__left -->
                <div class="topbar-one__right">
                    <a href="<?=base_url('placements');?>" <?=($active == 'placements')?'class="text-warning"':'';?> >Placements</a>
                    <a href="<?=base_url('alumni');?>" <?=($active == 'alumni')?'class="text-warning"':'';?>>Alumni</a>
                <!--
                    <a href="#">Exam Section</a>
                    <a href="#">Research</a>
                    <ul>
                        <li><a href="#">NAAC</a></li>
                        <li>
                            <ul>
                                <li><a href="#">SSR Files</a></li>
                                <li><a href="#">DVV Files</a></li>
                            </ul>
                        </li>
                    </ul>
                --> 
                    <a href="<?=base_url('contact');?>" <?=($active == 'contact')?'class="text-warning"':'';?> >Contact</a>
            <!--    <a href="#">Student Corner</a>      -->
                </div><!-- /.topbar-one__right -->
            </div><!-- /.container -->
        </div><!-- /.topbar-one -->
        <header class="site-header site-header__header-one ">
            <nav class="navbar navbar-expand-lg navbar-light header-navigation stricky">
                <div class="container clearfix">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="logo-box clearfix">
                        <a class="navbar-brand" href="<?=base_url();?>">
                            <img src="<?=base_url('assets/images/logo-dark.png');?>" class="main-logo" width="280" alt="<?=$title;?>" />
                        </a>
                        <button class="menu-toggler" data-target=".main-navigation">
                            <span class="kipso-icon-menu"></span>
                        </button>
                    </div><!-- /.logo-box -->
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="main-navigation">
                        <ul class="navigation-box">
                            <li <?=($active == 'home' || $active == '')?'class="current"':'';?> >
                                <a href="<?=base_url();?>">Home</a>
                            </li>
                            <li <?=($active == 'about' || $active == 'governing-body' || $active == 'ombudsperson' || $active == 'vaageswari-group')?'class="current"':'';?> >
                                <a href="#">About</a>
                                <ul class="sub-menu">
                                    <li><a href="<?=base_url('about');?>">About Us</a></li>
                                    <li><a href="<?=base_url('governing-body');?>">Governing Body</a></li>
                                    <li><a href="<?=base_url('ombudsperson');?>">Ombudsperson</a></li>
                                    <li><a href="<?=base_url('vaageswari-group');?>">Vaageswari Group</a></li>
                                </ul><!-- /.sub-menu -->
                            </li>
                            <li <?=($active == 'administration')?'class="current"':'';?> >
                                <a href="<?=base_url('administration');?>">Administration</a>
                            </li>
                            <li <?=($active == 'admissions' || $active == 'feestructure' || $active == 'academic-regulations' || $active == 'committees')?'class="current"':'';?> >
                                <a href="#">Academics</a>
                                <ul class="sub-menu">
                                    <li><a href="<?=base_url('admissions');?>">Admissions</a></li>
                            <!--    <li><a href="<?=base_url('feestructure');?>">Fee Structure</a></li>     -->
                                    <li><a href="<?=base_url('academic-regulations');?>">Academic Regulations</a></li>
                                    <li><a href="<?=base_url('committees');?>">Committees</a></li>
                                </ul><!-- /.sub-menu -->
                            </li>
                            <li <?=($active == 'departments')?'class="current"':'';?>>
                                <a href="#">Departments</a>
                                <?php $departments = $this->get->table('departments', array('status' => '1')); if($departments != false){ ?>
                                <ul class="sub-menu">
                                    <?php foreach($departments as $department){ $string = preg_replace('/[^a-zA-Z0-9-]/', ' ', $department->d_name); strtolower(str_replace (" ", "-", $string)); ?>
                                        <?php if($department->d_name != 'H & S - English' && $department->d_name != 'H & S - Physics' && $department->d_name != 'H & S - Chemistry' && $department->d_name != 'H & S - Maths' && $department->d_name != 'Diploma Civil' && $department->d_name != 'Diploma ECE' && $department->d_name != 'Diploma EEE' && $department->d_name != 'Diploma Mechanical' && $department->d_name != 'Diploma H&S'){ ?>
                                            <li><a href="<?=base_url('departments/page/'.$department->sno);?>"><?=$department->d_name;?></a></li>
                                        <?php } } ?>
                                        <li><a href="#">H & S</a>
                                            <ul class="sub-menu">
                                                <?php foreach($departments as $department){ if($department->d_name == 'H & S - English' || $department->d_name == 'H & S - Physics' || $department->d_name == 'H & S - Chemistry' || $department->d_name == 'H & S - Maths'){ ?>
                                                    <li><a href="<?=base_url('departments/page/'.$department->sno);?>"><?=str_replace("H & S - ","",$department->d_name);?></a></li>
                                                <?php } } ?>
                                            </ul><!-- /.sub-menu -->
                                        </li>
                                </ul><!-- /.sub-menu -->
                                <?php } ?>
                            </li>
                            <li <?=($active == 'diploma')?'class="current"':'';?>>
                                <a href="#">Diploma</a>
                                <?php if($departments != false){ ?>
                                <ul class="sub-menu">
                                    <?php foreach($departments as $department){ $string = preg_replace('/[^a-zA-Z0-9-]/', ' ', $department->d_name); strtolower(str_replace (" ", "-", $string)); ?>
                                        <?php if($department->d_name == 'Diploma Civil' || $department->d_name == 'Diploma ECE' || $department->d_name == 'Diploma EEE' || $department->d_name == 'Diploma Mechanical' || $department->d_name == 'Diploma H&S'){ ?>
                                            <li><a href="<?=base_url('departments/page/'.$department->sno);?>"><?=$department->d_name;?></a></li>
                                        <?php } } ?>
                                </ul><!-- /.sub-menu -->
                                <?php } ?>
                            </li>
                            <li <?=($active == 'amenities')?'class="current"':'';?> >
                                <a href="<?=base_url('amenities');?>">Amenities</a>
                            </li>
                            <li <?=($active == 'activities')?'class="current"':'';?> >
                                <a href="<?=base_url('activities');?>">Activities</a>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
                <!-- /.container -->
            </nav>
            <div class="site-header__decor">
                <div class="site-header__decor-row">
                    <div class="site-header__decor-single">
                        <div class="site-header__decor-inner-1"></div><!-- /.site-header__decor-inner -->
                    </div><!-- /.site-header__decor-single -->
                    <div class="site-header__decor-single">
                        <div class="site-header__decor-inner-2"></div><!-- /.site-header__decor-inner -->
                    </div><!-- /.site-header__decor-single -->
                    <div class="site-header__decor-single">
                        <div class="site-header__decor-inner-3"></div><!-- /.site-header__decor-inner -->
                    </div><!-- /.site-header__decor-single -->
                </div><!-- /.site-header__decor-row -->
            </div><!-- /.site-header__decor -->
        </header><!-- /.site-header -->
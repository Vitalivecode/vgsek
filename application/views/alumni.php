        <section class="inner-banner">
            <div class="container">
                <ul class="list-unstyled thm-breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><a href="#">Alumni</a></li>
                </ul><!-- /.list-unstyled -->
                <h2 class="inner-banner__title">Alumni</h2><!-- /.inner-banner__title -->
            </div><!-- /.container -->
        </section><!-- /.inner-banner -->
        
        <section class="contact-one">
            <div class="container-fluid">
                <ul class="course-details__tab-navs list-unstyled nav nav-tabs" role="tablist">
                    <li>
                        <a class="<?=(isset($_POST['email']))?'':'active';?>" role="tab" data-toggle="tab" href="#alumnilist">Alumni List</a>
                    </li>
                    <li>
                        <a class="<?=(isset($_POST['email']))?'active':'';?>" role="tab" data-toggle="tab" href="#registrationform">Registration Form</a>
                    </li>
                </ul><!-- /.course-details__tab-navs list-unstyled -->
                
                
                <div class="tab-content course-details__tab-content ">
                    <div class="tab-pane <?=(isset($_POST['email']))?'':'show active';?> animated fadeInUp" role="tabpanel" id="alumnilist">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Sno</th>
                                    <th>Name</th>
                                    <th>Course</th>
                                    <th>Year of Pass</th>
                                    <th>Company</th>
                                    <th>Designation</th>
                                    <th>Photo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; if($alumni != false){ foreach($alumni as $alumn){ ?>
                                <tr>
                                    <td><?=$no++;?></td>
                                    <td><?=$alumn->name;?></td>
                                    <td><?=$alumn->edu;?></td>
                                    <td><?=$alumn->year_of_pass;?></td>
                                    <td><?=$alumn->company;?></td>
                                    <td><?=$alumn->disgnation;?></td>
                                    <td><?=($alumn->photo != '')?'<img src="'.base_url('uploads/'.$alumn->photo).'" class="img-responsive" height="45px" />':'';?></td>
                                </tr>
                                <?php } } else{ ?>
                                <tr>
                                    <td colspan="7" class="text-center">
                                        No Data
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                            
                        </table>
                    </div>
                    <div class="tab-pane <?=(isset($_POST['email']))?'show active':'';?> animated fadeInUp" role="tabpanel" id="registrationform">
                        <div class="container">
                            <h2 class="contact-info-one__title text-center">Alumni Registration Form</h2><!-- /.contact-one__title -->
                            <?=$mess;?><?=$error;?>
                            <form action="<?=base_url('alumni');?>" method="post" enctype='multipart/form-data' class="contact-one__form">
                                <div class="row low-gutters">
                                    <div class="col-lg-6">
                                        <input type="text" name="fullname" value="<?=($mess == '')?set_value('fullname'):'';?>" placeholder="Your Name">
                                        <?=form_error('fullname'); ?>
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-lg-6">
                                        <input type="text" name="father" value="<?=($mess == '')?set_value('father'):'';?>" placeholder="Father Name">
                                        <?=form_error('father'); ?>
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-lg-6">
                                        <input type="number" name="phone" value="<?=($mess == '')?set_value('phone'):'';?>" placeholder="Phone">
                                        <?=form_error('phone'); ?>
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-lg-6">
                                        <input type="email" name="email" value="<?=($mess == '')?set_value('email'):'';?>" placeholder="Email">
                                        <?=form_error('email'); ?>
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-lg-4">
                                        <input type="file" name="photo" accept="image/*" placeholder="Photo">
                                        <?=form_error('photo'); ?>
                                    </div><!-- /.col-lg-4 -->
                                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash();?>" />
                                    <div class="col-lg-4">
                                        <input type="text" name="education" value="<?=($mess == '')?set_value('education'):'';?>" placeholder="Education (Ex:Diploma/UG/PG)">
                                        <?=form_error('education'); ?>
                                    </div><!-- /.col-lg-4 -->
                                    <div class="col-lg-4">
                                        <input type="number" name="pass" value="<?=($mess == '')?set_value('pass'):'';?>" min="1990" max="<?=date('Y');?>" placeholder="Year of Pass (Ex: 2020)">
                                        <?=form_error('pass'); ?>
                                    </div><!-- /.col-lg-4 -->
                                    <div class="col-lg-6">
                                        <input type="text" name="company" value="<?=($mess == '')?set_value('company'):'';?>" placeholder="Company">
                                        <?=form_error('company'); ?>
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-lg-6">
                                        <input type="text" name="designation" value="<?=($mess == '')?set_value('designation'):'';?>" placeholder="Designation">
                                        <?=form_error('designation'); ?>
                                    </div><!-- /.col-lg-6 -->
                                </div><!-- /.row -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                                    </div>
                                </div>
                            </form><!-- /.contact-one__form -->
                        </div><!-- /.container -->
                    </div>
                </div>
                
                
            </div>
            
        </section><!-- /.contact-one -->
        
        
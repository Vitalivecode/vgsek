        <section class="inner-banner">
            <div class="container">
                <ul class="list-unstyled thm-breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><a href="#">Contact Us</a></li>
                </ul><!-- /.list-unstyled -->
                <h2 class="inner-banner__title">Contact Us</h2><!-- /.inner-banner__title -->
            </div><!-- /.container -->
        </section><!-- /.inner-banner -->
        
        <section class="contact-info-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-info-one__single wow fadeInUp" data-wow-duration="1500ms">
                            <div class="contact-info-one__icon"><i class="kipso-icon-placeholder"></i>
                                <!-- /.kipso-icon-manager -->
                            </div><!-- /.contact-info-one__icon -->
                            <h2 class="contact-info-one__title">Our Address</h2><!-- /.contact-info-one__title -->
                            <p class="contact-info-one__text"><?=($contact != false)?$contact[0]->address:'';?></p><!-- /.contact-info-one__text -->
                        </div><!-- /.contact-info-one__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-6">
                        <div class="contact-info-one__single wow fadeInDown" data-wow-duration="1500ms">
                            <div class="contact-info-one__icon"><i class="kipso-icon-contact"></i><!-- /.kipso-icon-manager -->
                            </div><!-- /.contact-info-one__icon -->
                            <h2 class="contact-info-one__title">Contact Info</h2><!-- /.contact-info-one__title -->
                            <p class="contact-info-one__text">
                                <a href="mailto:<?=($contact != false)?$contact[0]->email1:'';?>"><?=($contact != false)?$contact[0]->email1:'';?></a><br>
                                <a href="tel:<?=($contact != false)?$contact[0]->phone1:'';?>">+91-<?=($contact != false)?$contact[0]->phone1:'';?></a><br>
                                <a href="<?=($contact != false)?$contact[0]->website:'';?>"><?=($contact != false)?$contact[0]->website:'';?></a>
                            </p>
                        </div><!-- /.contact-info-one__single -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.contact-info-one -->
        <section class="contact-one">
            <div class="container">
                <h2 class="contact-one__title text-center">Get in touch <br>
                    with us</h2><!-- /.contact-one__title -->
                <?=$mess;?>
                <form action="<?=base_url('contact');?>" method="post" class="contact-one__form">
                    <div class="row low-gutters">
                        <div class="col-lg-6">
                            <input type="text" name="fullname" value="<?=($mess == '')?set_value('fullname'):'';?>" placeholder="Your Name">
                            <?=form_error('fullname'); ?>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <input type="text" name="email" value="<?=($mess == '')?set_value('email'):'';?>" placeholder="Email Address">
                            <?=form_error('email'); ?>
                        </div><!-- /.col-lg-6 -->
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash();?>" />
                        <div class="col-lg-12">
                            <textarea name="message" placeholder="Write Message"><?=($mess == '')?set_value('message'):'';?></textarea>
                            <?=form_error('message'); ?>
                            <div class="text-center">
                                <button type="submit" class="contact-one__btn thm-btn">Submit Comment</button>
                            </div><!-- /.text-center -->
                        </div><!-- /.col-lg-12 -->
                    </div><!-- /.row -->
                </form><!-- /.contact-one__form -->
            </div><!-- /.container -->
        </section><!-- /.contact-one -->
        
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15147.704579901572!2d79.1628993!3d18.3506535!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xff9136139341d5dd!2sVaageswari%20College%20of%20Engineering!5e0!3m2!1sen!2sin!4v1634046633390!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        
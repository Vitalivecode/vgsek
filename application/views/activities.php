        <section class="inner-banner">
            <div class="container">
                <ul class="list-unstyled thm-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active"><a href="#">Activities </a></li>
                </ul><!-- /.list-unstyled -->
                <h2 class="inner-banner__title">Activities</h2><!-- /.inner-banner__title -->
            </div><!-- /.container -->
        </section><!-- /.inner-banner -->
        <?php if(isset($activities) && !empty($activities) && ($activities != false)){ ?>
        <section class="about-one about-one__about-page tabs-section">
            <div class="container">
                <?php $count = count($activities); $n=1; foreach($activities as $activity){ ?>
                    <h4 class="mb-3"><?=ucwords(strtolower($activity->title));?></h4>
                    <p><?=$activity->description;?></p>
                    <div class="row">
                        <?php if(!empty($activity->image1)){ ?>
                        <div class="col-lg-3 col-md-4">
                            <div class="gallery-one__single">
                                <img src="<?=base_url("uploads/".$activity->image1);?>" alt="" style="min-height:200px;max-height:200px;">
                                <a href="<?=base_url("uploads/".$activity->image1);?>" class="gallery-one__popup img-popup"><i class="kipso-icon-plus-symbol"></i></a>
                            </div>
                        </div>
                        <?php } ?>
                        <?php if(!empty($activity->image2)){ ?>
                        <div class="col-lg-3 col-md-4">
                            <div class="gallery-one__single">
                                <img src="<?=base_url("uploads/".$activity->image2);?>" alt="" style="min-height:200px;max-height:200px;">
                                <a href="<?=base_url("uploads/".$activity->image2);?>" class="gallery-one__popup img-popup"><i class="kipso-icon-plus-symbol"></i></a>
                            </div>
                        </div>
                        <?php } ?>
                        <?php if(!empty($activity->image3)){ ?>
                        <div class="col-lg-3 col-md-4">
                            <div class="gallery-one__single">
                                <img src="<?=base_url("uploads/".$activity->image3);?>" alt="" style="min-height:200px;max-height:200px;">
                                <a href="<?=base_url("uploads/".$activity->image3);?>" class="gallery-one__popup img-popup"><i class="kipso-icon-plus-symbol"></i></a>
                            </div>
                        </div>
                        <?php } ?>
                        <?php if(!empty($activity->image4)){ ?>
                        <div class="col-lg-3 col-md-4">
                            <div class="gallery-one__single">
                                <img src="<?=base_url("uploads/".$activity->image4);?>" alt="" style="min-height:200px;max-height:200px;">
                                <a href="<?=base_url("uploads/".$activity->image4);?>" class="gallery-one__popup img-popup"><i class="kipso-icon-plus-symbol"></i></a>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <?php if($count != $n){ ?>
                        <div class="line"></div>
                    <?php } ?>
                <?php $n++; } ?>
         </div>
      </section>
        <?php } ?>
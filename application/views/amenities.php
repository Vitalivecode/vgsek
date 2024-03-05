        <section class="inner-banner">
            <div class="container">
                <ul class="list-unstyled thm-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active"><a href="#">Amenities </a></li>
                </ul><!-- /.list-unstyled -->
                <h2 class="inner-banner__title">Amenities</h2><!-- /.inner-banner__title -->
            </div><!-- /.container -->
        </section><!-- /.inner-banner -->
        
        <section class="about-one about-one__about-page tabs-section">
         <div class="container">
            <?php if($amenities != false){ $no = 1; foreach($amenities as $amenity){ ?>
                <h4 class="upper mb-3"><?=$amenity->amenities_name;?></h4>
                <?=$amenity->description;?>
                <div class="row">
                    <?php if($amenity->image1 != ''){ ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="gallery-one__single">
                                <img src="<?=base_url('uploads/'.$amenity->image1);?>" alt="<?=$amenity->amenities_name;?>">
                                <a href="<?=base_url('uploads/'.$amenity->image1);?>" class="gallery-one__popup img-popup"><i class="kipso-icon-plus-symbol"></i></a>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if($amenity->image2 != ''){ ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="gallery-one__single">
                                <img src="<?=base_url('uploads/'.$amenity->image2);?>" alt="<?=$amenity->amenities_name;?>">
                                <a href="<?=base_url('uploads/'.$amenity->image2);?>" class="gallery-one__popup img-popup"><i class="kipso-icon-plus-symbol"></i></a>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if($amenity->image3 != ''){ ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="gallery-one__single">
                                <img src="<?=base_url('uploads/'.$amenity->image3);?>" alt="<?=$amenity->amenities_name;?>">
                                <a href="<?=base_url('uploads/'.$amenity->image3);?>" class="gallery-one__popup img-popup"><i class="kipso-icon-plus-symbol"></i></a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <?php if($no != 1){ ?>
                <div class="line"></div>
                <?php } ?>
            <?php $no++; } } ?>
         </div>
      </section>
        
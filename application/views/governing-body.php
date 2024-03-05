        <section class="inner-banner">
            <div class="container">
                <ul class="list-unstyled thm-breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><a href="#">Governing Body</a></li>
                </ul><!-- /.list-unstyled -->
                <h2 class="inner-banner__title">Governing Body</h2><!-- /.inner-banner__title -->
            </div><!-- /.container -->
        </section><!-- /.inner-banner -->
        
        <section class="team-one  ">
            <div class="container">
                <div class="row">
                    <?php if($governing != false){ foreach($governing as $body){ $role = $dis->role($body->signature); ?>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="team-one__single">
                            <div class="team-one__image">
                                <img src="<?=base_url('uploads/'.$body->photo);?>" alt="<?=$body->name;?>" width="206px" height="206px">
                            </div><!-- /.team-one__image -->
                            <div class="team-one__content">
                                <h2 class="team-one__name"><a href="#"><?=$body->name;?></a></h2>
                                <!-- /.team-one__name -->
                                <p class="team-one__designation"><?=$body->designation;?> <!--  <?=($role != false)?$role[0]->role:'';?>    --> </p><!-- /.team-one__designation -->
                                <p class="team-one__text"><?=$body->profession;?></p>
                                <!-- /.team-one__text -->
                            </div><!-- /.team-one__content -->
                        </div><!-- /.team-one__single -->
                    </div><!-- /.col-lg-3 -->
                    <?php } } ?>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.team-one team-page -->
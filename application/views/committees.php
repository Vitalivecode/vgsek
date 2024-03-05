        <section class="inner-banner">
            <div class="container">
                <ul class="list-unstyled thm-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active"><a href="#">Committees</a></li>
                </ul><!-- /.list-unstyled -->
                <h2 class="inner-banner__title">Committees</h2><!-- /.inner-banner__title -->
            </div><!-- /.container -->
        </section><!-- /.inner-banner -->
        
        <section class="about-one about-one__about-page tabs-section">
         <div class="container">
            <div class="row">
                <?php if($committees != false){ ?>
                <div class="col-sm-5 col-lg-3">
                  <ul class="nav nav-tabs flex-column mb-3">
                    <?php $no=1; foreach($committees as $committy){ ?>
                     <li class="nav-item">
                        <a class="nav-link <?=($no == 1)?'active show':'';?>" data-toggle="tab" href="#tab-<?=$no;?>"><?=$committy->committee;?></a>
                     </li>
                    <?php $no++; } ?>
                  </ul>
               </div>
                <div class="col-sm-7 col-lg-9">
                  <div class="tab-content">
                    <?php $no=1; foreach($committees as $committy){ ?>
                     <div class="tab-pane <?=($no == 1)?'active show':'';?>" id="tab-<?=$no;?>">
                         <h4 class="text-center upper"><?=$committy->committee;?></h4>
                                <div class="table">
                                    <table class="table table-hover table-striped">
                                        <thead class="thead-dark">
                                            <tr>
                                  	            <th>S.NO</th>
                                  	            <th>NAME OF THE MEMBER</th>
                                  	            <th>DESIGNATION</th>
                                  	            <th>DESIGNATION IN THE COMMITTEE</th>
                                  	            <!--<th>PHOTO</th>-->
                                  	        </tr>
                                        </thead>
                              	        <tbody>
                              	            <?php $sno = 1; $committeees = $dis->committees($committy->committee); if($committeees != false){ foreach($committeees as $committee){ ?>
                                  	        <tr>
                                  	            <td><?=$sno++;?></td>
                                  	            <td><?=$committee->name;?></td>
                                  	            <td><?=($dis->frole($committee->clg_designation) != false)?$dis->frole($committee->clg_designation)[0]->role:'';?></td>
                                  	            <td><?=($dis->role($committee->c_designation) != false)?$dis->role($committee->c_designation)[0]->role:'';?></td>
                                  	            <!--<td><img src="princi.jpg"></td>-->
                                  	        </tr>
                                  	        <?php } } ?>
                                  	    </tbody>
                          	        </table>
                                </div>
                     </div>
                    <?php $no++; } ?>
                  </div>
               </div>
               <?php } ?>
            </div>
         </div>
      </section>
        
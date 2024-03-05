        <section class="inner-banner">
            <div class="container">
                <ul class="list-unstyled thm-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active"><a href="#">NAAC</a></li>
                </ul><!-- /.list-unstyled -->
                <h2 class="inner-banner__title">NAAC</h2><!-- /.inner-banner__title -->
            </div><!-- /.container -->
        </section><!-- /.inner-banner -->
        <?php if($criterions != false){ ?>
        <section class="about-one about-one__about-page tabs-section">
         <div class="container">
            <div class="row">
               <div class="col-sm-5 col-lg-3">
                  <ul class="nav nav-tabs flex-column mb-3">
                     <li class="nav-item">
                        <a class="nav-link active show" data-toggle="tab" href="#tab-1">SSR Files</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tab-2">DVV Files</a>
                     </li>
                  </ul>
               </div>
               <div class="col-sm-7 col-lg-9">
                  <div class="tab-content">
                     <div class="tab-pane active show" id="tab-1">
                         <h4 class="text-center upper">SSR</h4>
                         
                         <ul class="criterion">
                            <?php foreach($criterions as $criterion){ ?>
                                <li><h5><?=$criterion->criterion;?></h5>
                                    <?=$dis->build_parent($this->get->table('naac', array('criterion' => $criterion->criterion, 'status' => 1)));?> 
                                <!--
                                 <ul class="topic">
                                     <li><h6>1.1.1</h6>
                                         <ul class="topic-info">
                                             <li><a href="#">1.1.1 (1)</a></li>
                                         </ul>
                                     </li>
                                     <li><h6>1.1.2</h6>
                                         <ul class="topic-info">
                                             <li><a href="#">1.1.2 (1)</a></li>
                                         </ul>
                                     </li>
                                     <li><h6>1.1.3</h6>
                                         <ul class="topic-info">
                                             <li><a href="#">1.1.3 (1)</a></li>
                                             <li><a href="#">1.1.3 (2)</a></li>
                                             <li><a href="#">1.1.3 (3)</a></li>
                                             <li><a href="#">1.1.3 (4)</a></li>
                                         </ul>
                                     </li>
                                 </ul>
                                -->
                            </li>
                            <?php } ?>
                         </ul>
                     </div>
                     <div class="tab-pane" id="tab-2">
                         <h4 class="text-center upper">DVV</h4>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
        <?php } ?>
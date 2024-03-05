        <section class="inner-banner">
            <div class="container">
                <ul class="list-unstyled thm-breadcrumb">
                    <li><a href="<?=base_url();?>">Home</a></li>
                    <li class="active"><a href="#">NAAC</a></li>
                </ul>
                <h2 class="inner-banner__title">NAAC</h2>
            </div>
        </section>
        <section class="about-one about-one__about-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="course-details__price h150">
                            <p class="course-details__price-text">Statutory Declaration</p>
                            <a href="uploads/naac/Satutory Declaration New.pdf" target="_blank">(View/Download)</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="course-details__price h150">
                            <p class="course-details__price-text">College Undertaking</p>
                            <a href="uploads/naac/College Undertaking.pdf" target="_blank">(View/Download)</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="course-details__price h150">
                            <p class="course-details__price-text">AICTE Approval</p>
                            <a href="uploads/naac/AICTE Approval.PDF" target="_blank">(View/Download)</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="course-details__price h150">
                            <p class="course-details__price-text">JNTUH affiliation</p>
                            <a href="uploads/naac/JNTUH Affiliation.pdf" target="_blank">(View/Download)</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="course-details__price h150">
                            <p class="course-details__price-text">AISHE Certificate</p>
                            <a href="uploads/naac/AISHE Certificate.pdf" target="_blank">(View/Download)</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="course-details__price h150">
                            <p class="course-details__price-text">Self Declaration</p>
                            <a href="uploads/naac/Self-Declaration-New.pdf" target="_blank">(View/Download)</a>
                        </div>
                    </div>
                </div>
            </div>

            <?php if($criterions != false){ ?>
            <div class="container" style="margin-top:60px;">
                <div class="row">
                   <div class="col-sm-5 col-lg-3">
                      <ul class="nav nav-tabs flex-column mb-3">
                         <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-0">IIQA</a>
                         </li>
                         <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-1">NAAC</a>
                         </li>
                         <li class="nav-item py-2">SSR Files</li>
                         <?php if($criterions != false){ $no=1; foreach($criterions as $criterion){ ?>
                             <li class="nav-item">
                                 <a class="nav-link <?=($no==1)?'active':'';?>" data-toggle="tab" href="#tab-1-<?=$no++;?>"><?=$criterion->criterion;?></a>
                             </li>
                         <?php } } ?>
                         <li class="nav-item">
                            <a class="nav-link" id="protect" data-toggle="tab" href="#tab-2">DVV Files</a>
                         </li>
                      </ul>
                   </div>
                   <div class="col-sm-7 col-lg-9">
                      <div class="tab-content">
                         <div class="tab-pane" id="tab-0">
                             <h4 class="text-center upper">IIQA</h4>
                            <div class="row">
                                <div class="col-lg-8 offset-2">
                                    <div class="course-details__price h150">
                                        <p class="course-details__price-text">Institutional Information for Quality Assessment (IIQA)</p>
                                        <a href="uploads/naac/iiqa.pdf" target="_blank">(View/Download)</a>
                                    </div>
                                </div>
                            </div>
                         </div>
                         <div class="tab-pane" id="tab-1">
                             <h4 class="text-center upper">SSR</h4>
                            <div class="row">
                                <div class="col-lg-8 offset-2">
                                    <div class="course-details__price h150">
                                        <p class="course-details__price-text">SSR VGSE PDF</p>
                                        <a href="uploads/naac/SSR-VGSE.pdf" target="_blank">(View/Download)</a>
                                    </div>
                                </div>
                            </div>
                         </div>
                         <?php if($criterions == false && $criterions != false){ ?>
                         <div class="tab-pane active show" id="tab-1">
                            <h4 class="text-center upper">SSR</h4>
                            <!--
                                <ul class="criterion">
                                    <?php foreach($criterions as $criterion){ ?>
                                        <li>
                                            <?=$dis->build_parent($this->get->table('naac', array('criterion' => $criterion->criterion, 'status' => 1)));?>
                                        </li>
                                    <?php } ?>
                                </ul>
                            -->
                         </div>
                         <?php } ?>
                            <?php if($criterions != false){ $no=1; foreach($criterions as $criterion){ ?>
                            <div class="tab-pane <?=($no==1)?'active show':'';?>" id="tab-1-<?=$no++;?>">
                                <h4 class="text-center upper mb-3">SSR</h4>
                                <h4><?=$criterion->criterion;?></h4>
                                <?php $childrens = $this->get->table('naac', array('type' => $criterion->type, 'criterion' => $criterion->criterion, 'topic_parent !=' => 0, 'status' => 1), '', 'topic'); if($childrens != false){ ?>
                                <div class="table">
                                    <table class="table-bordered" width="100%">
                    				    <tbody>
                    				        <?php $topics = array(); foreach($childrens as $children){ $topics[] = $children->topic.'@'.$children->topic_file; }  natsort($topics); if(!empty($topics)){ foreach($topics as $topic){ $topc = explode('@',$topic); $t = $topc[0]; $url = $topc[1]; ?>
                                                <tr><td>Criterion: <?=$t;?></td><td><a href="<?=base_url('uploads/'.$url);?>">Click here</a></td></tr>
                                            <?php } } ?>
                        				</tbody>
                        			</table>
                                </div>
                                <?php } ?>
                            </div>
                            <?php } } ?>
                            <div class="tab-pane" id="tab-2">
                                <h4 class="text-center upper mb-3">DVV</h4>
                                <div id="protect-data"></div>
                            </div>
                          </div>
                       </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </section>
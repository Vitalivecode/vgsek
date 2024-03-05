        <section class="inner-banner">
            <div class="container">
                <ul class="list-unstyled thm-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active"><a href="#">Placements </a></li>
                </ul><!-- /.list-unstyled -->
                <h2 class="inner-banner__title">Placements </h2><!-- /.inner-banner__title -->
            </div><!-- /.container -->
        </section><!-- /.inner-banner -->
        
        <section class="about-one about-one__about-page tabs-section">
         <div class="container">
            <div class="row">
               <?php if($placements != false){ ?>
               <div class="col-sm-4 col-lg-2">
                  <ul class="nav nav-tabs flex-column mb-3">
                    <?php $no=1; foreach($placements as $placement){ ?>
                     <li class="nav-item">
                        <a class="nav-link <?=($no == 1)?'active show':'';?>" data-toggle="tab" href="#tab-<?=$no;?>"><?=$placement->year_of_pass;?>-<?=$placement->year_of_pass+1;?></a>
                     </li>
                    <?php $no++; } ?>
                  </ul>
               </div>
               <div class="col-sm-8 col-lg-10">
                  <div class="tab-content">
                    <?php $no=1; foreach($placements as $placement){ ?>
                     <div class="tab-pane <?=($no == 1)?'active show':'';?>" id="tab-<?=$no;?>">
                                <div class="table">
                                    <table class="table table-hover table-striped">
                                        <thead class="thead-dark">
                                            <tr>
                                  	            <th>S.No</th>
                                  	            <th>Company Logo & URL</th>
                                  	            <th>Name of the Company</th>
                                  	            <th>No. of Students</th>
                                  	            <th>View</th>
                                  	        </tr>
                                        </thead>
                              	        <tbody>
                              	            <?php $sno = 1; $companies = $dis->placements($placement->year_of_pass); if($companies != false){ foreach($companies as $company){ $companyDetails = $dis->company($company->company); if($companyDetails != false){ ?>
                                  	        <tr>
                                  	            <td><?=$sno++;?></td>
                                  	            <td><a href="https://<?=$companyDetails[0]->url;?>" target="_blank"><img src="<?=base_url('uploads/'.$companyDetails[0]->logo);?>" height="40" alt="<?=$companyDetails[0]->company_name;?>" /></a></td>
                                  	            <td><?=$companyDetails[0]->company_name;?></td>
                                  	            <td>
                                  	                <?php //($dis->countstudents($placement->year_of_pass, $company->company) != false)?count($dis->countstudents($placement->year_of_pass, $company->company)):0;?>
                                  	                <?=$company->no_of_students;?>
                                  	            </td>
                                  	            <td><a href="<?=base_url('uploads/'.$company->pimage);?>" class="img-popup"> <button class="btn btn-primary">View</button> </a></td>
                                  	        </tr>
                                  	        <?php } } } ?>
                                  	    </tbody>
                          	        </table>
                                </div>
                     </div>
                    <?php $no++; } ?>
            <!--
                    <?php $no=1; foreach($placements as $placement){ ?>
                     <div class="tab-pane <?=($no == 1)?'active show':'';?>" id="tab-<?=$no;?>">
                                <div class="table">
                                    <table class="table table-hover table-striped">
                                        <thead class="thead-dark">
                                            <tr>
                                  	            <th>S.No</th>
                                  	            <th>Company Logo & URL</th>
                                  	            <th>Name of the Company</th>
                                  	            <th>No. of Students</th>
                                  	        </tr>
                                        </thead>
                              	        <tbody>
                              	            <?php $sno = 1; $companies = $dis->placements($placement->year_of_pass); if($companies != false){ foreach($companies as $company){ $companyDetails = $dis->company($company->sno); if($companyDetails != false){ ?>
                                  	        <tr>
                                  	            <td><?=$sno++;?></td>
                                  	            <td><a href="https://<?=$companyDetails[0]->url;?>" target="_blank"><img src="<?=base_url('uploads/'.$companyDetails[0]->logo);?>" height="40" alt="<?=$companyDetails[0]->company_name;?>" /></a></td>
                                  	            <td><?=$companyDetails[0]->company_name;?></td>
                                  	            <td><?=($dis->countstudents($placement->year_of_pass, $company->company) != false)?count($dis->countstudents($placement->year_of_pass, $company->company)):0;?></td>
                                  	        </tr>
                                  	        <?php } } } ?>
                                  	    </tbody>
                          	        </table>
                                </div>
                     </div>
                    <?php $no++; } ?>
            -->
            
                  </div>
               </div>
               <?php } ?>
            </div>
         </div>
      </section>
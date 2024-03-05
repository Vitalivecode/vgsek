<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title><?=$title;?></title>
      <link rel="shortcut icon" href="<?=base_url('../uploads/'.$site[0]->favicon);?>" />
      <link rel="stylesheet" href="<?=base_url('css/bootstrap.min.css');?>">
      <link rel="stylesheet" href="<?=base_url('css/typography.css');?>">
      <link rel="stylesheet" href="<?=base_url('css/style.css');?>">
      <link rel="stylesheet" href="<?=base_url('css/custom.css');?>">
      <link rel="stylesheet" href="<?=base_url('css/responsive.css');?>">
      <link rel="stylesheet" href="<?=base_url('css/sweetalert.css');?>" rel="stylesheet" type="text/css">
   </head>
   <body>
        <section class="sign-in-page">
          <div id="container-inside">
              <div id="circle-small"></div>
              <div id="circle-medium"></div>
          </div>
            <div class="container p-0">
                <div class="row h-100">
                    <div class="col-md-12 my-auto text-center">
                        <div class="w-75 mx-auto">
                            <div class="iq-card">
                                <div class="iq-card-body">
                                    <img src="<?=base_url('images/loader.png');?>" class="img-fluid" />
                                    <div class="">
                                        <h3 class="py-3">This Account has been Suspended</h3>
                                        <h4 class="">Please contact your administrator</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
      <div id="BaseUri" data-url="<?=base_url();?>"></div>
	  <div id="ajaxMessage"></div>
   </body>
</html>

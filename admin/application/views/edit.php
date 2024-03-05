		<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-md-4 col-xs-12">
                        <h4 class="page-title"><?=$title;?></h4> </div>
                    <div class="col-lg-9 col-md-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="<?=base_url();?>">Home</a></li>
                            <li class="active"><?=$title;?></li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
				<div class="row">
					<div class="col-lg-12">
						<?=$output;?>
					</div>
				</div>
            </div>
<script type="text/javascript">
jQuery(document).on("gpsafterrequest",function(event,container){
    if(GPS.current_task == 'save')
    {
        var validate = jQuery(container).find('.validation-error').length;
        if(validate == 0)
        {
            jQuery.toast({
        		heading: 'Successfully Saved',
        		text: '',
        		position: 'top-right',
        		loaderBg: '#ff6849',
        		icon: 'success',
        		hideAfter: 3500,
        		stack: 6
        	})
        }
    }
	if(GPS.current_task == 'remove')
    {
		jQuery.toast({
			heading: 'Successfully Deleted',
			text: '',
			position: 'top-right',
			loaderBg: '#ff6849',
			icon: 'success',
			hideAfter: 3500,
			stack: 6
		})
    }
    <?php if(isset($scripts)){ echo $scripts; } ?>
    <?php if($this->uri->segment(2) == 'student-classes'){ ?>
	if(GPS.current_task == 'edit' || GPS.current_task == 'create')
    {
        jQuery("#url").keyup(function(){
            var value = jQuery(this).val();
            var fieldValue = value.replace(/(^\w+:|^)\/\//, '');
            jQuery(this).val(fieldValue);
        });
    }
    if(GPS.current_task == 'edit')
    {
        var url = jQuery("#url").val();
        var urlValue = url.replace('https://','');
        jQuery("#url").val(urlValue);
    }
    <?php } ?>
});
jQuery(document).on("ready gpsafterrequest gpsafterdepend", function(event, container) {
    if(container){
       jQuery(container).find(".select2").select2();
    }else{
       jQuery(".gps").find(".select2").select2();
    }
});
</script>
<script src="<?=base_url();?>plugins/bower_components/toast-master/js/jquery.toast.js"></script>
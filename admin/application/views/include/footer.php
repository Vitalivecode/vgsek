<?php if($this->uri->segment(1) != '' && $this->uri->segment(1) != 'login' && $this->uri->segment(1) != 'Login' && $this->uri->segment(1) != 'Forgot' && $this->uri->segment(1) != 'forgot') { ?>
           <footer class="footer text-center"><div class="pull-left"><?=$site[0]->footer_left;?></div><div class="pull-right"><?=$site[0]->footer_right;?></div></footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
<?php } ?>
	<div id="BaseUri" data-url="<?=base_url();?>"></div>
	<div id="ajaxMessage"></div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url();?>plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
	<script src="<?=base_url();?>plugins/bower_components/bootstrap-switch/bootstrap-switch.min.js"></script>
    <!--Wave Effects -->
    <script src="<?=base_url();?>js/waves.js"></script>
	<?php if($this->uri->segment(1) != '' && $this->uri->segment(1) != 'login' && $this->uri->segment(1) != 'Login' && $this->uri->segment(1) != 'Forgot' && $this->uri->segment(1) != 'forgot') { ?>
    <script src="<?=base_url();?>plugins/bower_components/switchery/dist/switchery.min.js"></script>
	<!--Counter js -->
    <script src="<?=base_url();?>plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="<?=base_url();?>plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!--Morris JavaScript -->
    <script src="<?=base_url();?>plugins/bower_components/raphael/raphael-min.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="<?=base_url();?>plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="<?=base_url();?>plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js"></script>
    <!-- Sweet-Alert  -->
    <script src="<?=base_url();?>plugins/bower_components/sweetalert/sweetalert.min.js"></script>
    <script src="<?=base_url();?>plugins/bower_components/sweetalert/jquery.sweet-alert.custom.js"></script>
    <!-- icheck -->
    <script src="<?=base_url();?>plugins/bower_components/icheck/icheck.min.js"></script>
    <script src="<?=base_url();?>plugins/bower_components/icheck/icheck.init.js"></script>
    <!-- Plugin JavaScript -->
    <script src="<?=base_url();?>plugins/bower_components/moment/moment.js"></script>
    <!-- Magnific popup JavaScript -->
    <script src="<?=base_url();?>plugins/bower_components/Magnific-Popup-master/dist/jquery.magnific-popup.min.js"></script>
    <script src="<?=base_url();?>plugins/bower_components/Magnific-Popup-master/dist/jquery.magnific-popup-init.js"></script>
    <!--- Typeheader -->
    <script src="<?=base_url('plugins/bower_components/typeahead.js-master/dist/typeahead.bundle.min.js');?>"></script>
    <script src="<?=base_url('plugins/bower_components/typeahead.js-master/dist/typeahead-init.js');?>"></script>
    <!--- Nestable ----->
    <script src="<?=base_url();?>plugins/bower_components/nestable/jquery.nestable.js"></script>
	<!-- jQuery file upload -->
    <script src="<?=base_url();?>plugins/bower_components/dropify/dist/js/dropify.min.js"></script>
    <script src="<?=base_url();?>plugins/bower_components/custom-select/custom-select.min.js" type="text/javascript"></script>
    <?php if($this->uri->segment(1) == 'users' || $this->uri->segment(1) == 'create' || $this->uri->segment(1) == 'tables') { ?>
	<script src="<?=base_url();?>plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
	<script>
    $('#tables-export').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script>
	<?php } ?>
    <!-- Treeview Plugin JavaScript -->
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-treeview/1.2.0/bootstrap-treeview.min.js"></script>
	<script src="<?=base_url();?>plugins/ckeditor/ckeditor.js"></script>
	<!-- Custom JS -->
	<?=$site[0]->j_links;?>
	<?php if(!empty($site[0]->js)) { ?>
	<script type="text/javascript">
		<?=$site[0]->js;?>
	</script>
	<?php } ?>
	<?php if($this->session->flashdata('alertMessage')) { ?>
		<script type="text/javascript">
		$(document).ready(function() {
			$.toast({
				heading: '<?=$this->session->flashdata('alertMessage')['title'];?>',
				text: '<?=$this->session->flashdata('alertMessage')['message'];?>',
				position: 'top-right',
				loaderBg: '#ff6849',
				icon: '<?=$this->session->flashdata('alertMessage')['status'];?>',
				hideAfter: 3500,
				stack: 6
			})
		});
		</script>
	<?php } ?>
	<?php } ?>
    <!--Style Switcher -->
    <script src="<?=base_url();?>plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>   
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
 <?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
		    <?php $this->load->view("admin/_partials/header.php") ?>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<?php $this->load->view("admin/_partials/navbar.php") ?>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
	<?php if($this->session->userdata('akses')=='1'):?>
	<?php $this->load->view("admin/_partials/sidebar.php") ?>
      <?php else:?>
	  <?php $this->load->view("admin/_partials/sidebar2.php") ?>
       <?php endif;?>
		<!-- End Sidebar -->

		<div class="main-panel">
			<?php $this->load->view("admin/".$active_controller."/".$active_function); ?>
				
			</div>
            <!--- footer  -->
            <?php $this->load->view("admin/_partials/footer.php") ?>
             <!--- footer  -->
		</div>
		
		<!-- Custom template | don't include it in your project! -->
		 <?php //$this->load->view("admin/_partials/customtemplate.php") ?>
		<!-- End Custom template -->
	</div>
	<!--   script   -->
	  <?php $this->load->view("admin/_partials/scriptfoot2.php") ?>
	  <?php if ($this->session->flashdata('login') != null) { ?>
		<script>
		$.notify(
			{
				icon: "flaticon-alarm-1",
				title: "<?php echo $this->session->flashdata('login'); ?>",
				message: ""
			},
			{
				type: "info",
				placement: {
					from: "top",
					align: "right"
				},
				time: 0
			}
		);
		</script>
<?php } ?>

<?php if ($this->session->flashdata('data') != null) { ?>
<script>
					swal({
						title: "Sukses!",
						text: "<?php echo $this->session->flashdata('data'); ?>",
						icon: "success",
						buttons: {
							confirm: {
								text: "Confirm Me",
								value: true,
								visible: true,
								className: "btn btn-success",
								closeModal: true
							}
						}
					});	
</script>	  
  <?php } ?>  

  
<?php if ($this->session->flashdata('error') != null) { ?>
<script>
					swal("Gagal", "<?php echo $this->session->flashdata('error'); ?>", {
						icon : "error",
						buttons: {        			
							confirm: {
								className : 'btn btn-danger'
							}
						},
					});
</script>	  
  <?php } ?> 

  <script>
	// Optional
	Prism.plugins.NormalizeWhitespace.setDefaults({
		'remove-trailing': true,
		'remove-indent': true,
		'left-trim': true,
		'right-trim': true,
	});
	
	// handle links with @href started with '#' only
	$(document).on('click', 'a[href^="#"]', function(e) {
		// target element id
		var id = $(this).attr('href');

		// target element
		var $id = $(id);
		if ($id.length === 0) {
			return;
		}

		// prevent standard hash navigation (avoid blinking in IE)
		e.preventDefault();

		// top position relative to the document
		var pos = $id.offset().top - 80;

		// animated top scrolling
		$('body, html').animate({scrollTop: pos});
	});
</script>
<script>
	$('.css-animate').on('change', function() { 
		$('#lookatme').removeClass().addClass('animated ' + this.value);
	})
</script> 
 


</body>
</html>

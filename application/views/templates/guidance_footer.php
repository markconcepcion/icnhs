
			
		</div>
	</div>

	<?php $this->load->view( 'guidance/Modals/DefaultModal' ); ?>

	<script src="<?php echo base_url("vendors/scripts/script.js");?>"></script>
	<script src="<?php echo base_url("src/plugins/cropperjs/dist/cropper.js");?>"></script>
	<script src="<?php echo base_url("src/plugins/datatables/media/js/jquery.dataTables.min.js");?>"></script>
	<script src="<?php echo base_url("src/plugins/datatables/media/js/dataTables.bootstrap4.js")?>"></script>
	<script src="<?php echo base_url("src/plugins/datatables/media/js/dataTables.responsive.js");?>"></script>
	<script src="<?php echo base_url("src/plugins/datatables/media/js/responsive.bootstrap4.js");?>"></script>
	<!-- buttons for Export datatable -->
	<script src="<?php echo base_url("src/plugins/datatables/media/js/button/dataTables.buttons.js");?>"></script>
	<script src="<?php echo base_url("src/plugins/datatables/media/js/button/buttons.bootstrap4.js");?>"></script>
	<script src="<?php echo base_url("src/plugins/datatables/media/js/button/buttons.print.js");?>"></script>
	<script src="<?php echo base_url("src/plugins/datatables/media/js/button/buttons.html5.js");?>"></script>
	<script src="<?php echo base_url("src/plugins/datatables/media/js/button/buttons.flash.js");?>"></script>
	<script src="<?php echo base_url("src/plugins/datatables/media/js/button/pdfmake.min.js");?>"></script>
	<script src="<?php echo base_url("src/plugins/datatables/media/js/button/vfs_fonts.js");?>"></script>
	
	<script>
		
		<?php 
			$status = 0;
			if( $this->session->flashdata( 'SuccessMSG' ) ) $status = 1; 
			if( $this->session->flashdata( 'ErrorMSG' ) ) $status = 2; 
			if( $this->session->flashdata( 'ConfirmMSG' ) ) $status = 3; 
		?>
		<?php $IDactive = isset($active)? $active:false; ?>

		var status = parseInt( "<?php echo $status; ?>" );
		var baseurl = "<?php echo base_url(); ?>";
		var IDactive = "<?php echo $IDactive; ?>";
	</script>

	<script src="<?php echo base_url("assets/js/standard.js");?>"></script>
	<?php if ( $active ) { ?>
		<script src="<?php echo base_url("assets/js/guidance/$active.js");?>"></script>
	<?php } ?>

	<script>
		$('document').ready(function(){
			$('.data-table').DataTable({
				scrollCollapse: true,
				autoWidth: false,
				responsive: true,
				columnDefs: [{
					targets: "datatable-nosort",
					orderable: false,
				}],
				"lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
				"language": {
					"info": "_START_-_END_ of _TOTAL_ entries",
					searchPlaceholder: "Search"
				},
			});
			$('.data-table-export').DataTable({
				scrollCollapse: true,
				autoWidth: false,
				responsive: true,
				columnDefs: [{
					targets: "datatable-nosort",
					orderable: false,
				}],
				"lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
				"language": {
					"info": "_START_-_END_ of _TOTAL_ entries",
					searchPlaceholder: "Search"
				},
				dom: 'Bfrtip',
				buttons: [
				'copy', 'csv', 'pdf', 'print'
				]
			});
			var table = $('.select-row').DataTable();
			$('.select-row tbody').on('click', 'tr', function () {
				if ($(this).hasClass('selected')) {
					$(this).removeClass('selected');
				}
				else {
					table.$('tr.selected').removeClass('selected');
					$(this).addClass('selected');
				}
			});
			var multipletable = $('.multiple-select-row').DataTable();
			$('.multiple-select-row tbody').on('click', 'tr', function () {
				$(this).toggleClass('selected');
			});
		});
	</script>

	<script>
		// SETTINGS 
		$(function(){

			// SUBJECT
			$('.EditSub').on('click', function(){
				data = this.id.split('-');
				if ( this.id == 'clear' ) { data[0] = ''; data[1] = ''; data[2] = ''; }
				$('#IDsubject').val( data[0]);
				$('#subjectCode').val( data[1]);
				$('#subjectDesc').val( data[2]);
			});

			// STRAND
			$('.EditStrand').on('click', function(){
				data = this.id.split('-');
				if ( this.id == 'clear' ) { data[0] = ''; data[1] = ''; data[2] = ''; }
				$('#IDstrand').val( data[0]);
				$('#strandCode').val( data[1]);
				$('#strandName').val( data[2]);
			});

			//TIMELINE
			$('#timelineType').on('change', function(){
				if( this.value != 'SY' ) {
					document.getElementById('IDtimeline').disabled = true
					document.getElementById('IDtimeline').required = false
				} else {
					document.getElementById('IDtimeline').disabled = true
					document.getElementById('IDtimeline').required = false
				} 
			});
		});
	</script>
</body>
</html>


	
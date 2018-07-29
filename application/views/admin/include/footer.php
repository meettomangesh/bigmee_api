	<footer>

		<p style="text-align:center;">
			<span >&copy; <?= date('Y')?> <a href="http://fivecube.net" target="_blank"> Fivecube Info Services</a></span>
			
		</p>

	</footer>
	
	<!-- start: JavaScript-->

	<script src="<?= base_url('src/js/jquery-migrate-1.0.0.min.js') ?>"></script>
	
		<script src="<?= base_url('src/js/jquery-ui-1.10.0.custom.min.js') ?>"></script>
		<script src="<?= base_url('src/js/bootstrap.min.js') ?>"></script>
		<script src="<?= base_url('dist/dataTable/js/jquery.dataTables.js') ?>"></script>

		<script src="<?= base_url('src/js/excanvas.js') ?>"></script>
	<script src="<?= base_url('src/js/jquery.flot.js') ?>"></script>
	<script src="<?= base_url('src/js/jquery.flot.pie.js') ?>"></script>
	<script src="<?= base_url('src/js/jquery.flot.stack.js') ?>"></script>
	<script src="<?= base_url('src/js/jquery.flot.resize.min.js') ?>"></script>
	
	
		<script src="<?= base_url('src/js/jquery.chosen.min.js') ?>"></script>
	
		<script src="<?= base_url('src/js/jquery.uniform.min.js') ?>"></script>
		<script src="<?= base_url('src/js/jquery.sparkline.min.js') ?>"></script>
		<script src="<?= base_url('src/js/jquery.uploadify-3.1.min.js') ?>"></script>
		<script src="<?= base_url('src/js/jquery.imagesloaded.js') ?>"></script>
		<script src="<?= base_url('src/js/jquery.knob.modified.js') ?>"></script>
	
		<script src="<?= base_url('src/js/counter.js') ?>"></script>
	
		<script src="<?= base_url('src/js/retina.js') ?>"></script>
        <!-- LobiBox plugin -->
        <script src="<?= base_url('dist/lobibox-master/dist/js/lobibox.min.js') ?>"></script>
    
        <?php if(isset($js)) print set_js($js);   ?>
		<script src="<?= base_url('src/validation/dist/jquery.validate.js') ?>"></script>

		<script src="<?= base_url('src/js/custom.js') ?>"></script>
		<script src="<?= base_url('dist/js/helper.js') ?>"></script>
		<script src="<?= base_url('src/js/exc/execussion.ver.2.0.js') ?>"></script>
		<script src="<?= base_url('dist/js/exc/execussion.ver.1.0.js') ?>"></script>
	<!-- end: JavaScript-->
</body>
</html>

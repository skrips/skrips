<div class="page-footer">
    <div class="page-footer-inner">
        2014 &copy; Metronic by keenthemes.
    </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>
<script src="<?php echo base_url() . "assets/js/"; ?>jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() . "assets/js/"; ?>jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?php echo base_url() . "assets/js/"; ?>jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() . "assets/js/"; ?>bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() . "assets/js/"; ?>bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() . "assets/js/"; ?>jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() . "assets/js/"; ?>jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() . "assets/js/"; ?>jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() . "assets/js/"; ?>uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() . "assets/js/"; ?>bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?php echo base_url() . "assets/js"; ?>select2/select2.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url() . "assets/js/"; ?>metronic.js" type="text/javascript"></script>
<script src="<?php echo base_url() . "assets/js/"; ?>layout.js" type="text/javascript"></script>
<script src="<?php echo base_url() . "assets/js/"; ?>demo.js" type="text/javascript"></script>
<script src="<?php echo base_url() . "assets/js/"; ?>form-samples.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function() {
        // initiate layout and plugins
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        Demo.init(); // init demo features
        FormSamples.init();
    });
</script>
<!-- END JAVASCRIPTS -->

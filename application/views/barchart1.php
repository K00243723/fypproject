<?php
 $this->load->view('header'); 
 $this->load->helper('url'); 
 $base = base_url() . index_page();
 $js_base = base_url();
?>
<!-- Title -->
     <h1 style="text-align:center;color:brown;">Top 10 Countries Maternity benefits</h1>

     <!-- Your D3 code for bar graph -->
     <script type="text/javascript" src="<?php echo $js_base."assets/js/barchart.js"?>"></script>

     <!-- Info -->


<?php
 $this->load->view('footer'); 
?>

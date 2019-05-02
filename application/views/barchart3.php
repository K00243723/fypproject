<?php
 $this->load->view('header'); 
 $this->load->helper('url'); 
 $base = base_url() . index_page();
 $js_base = base_url();
 
?>

<!-- Title --><div id="bestpaternitypolicies">
     <h1 style="text-align:center;color:brown;">Best paternity leave policies in the world</h1>

     <!-- Your D3 code for bar graph -->
     <script type="text/javascript" src="<?php echo $js_base."assets/js/paternitybarchart.js"?>"></script>

     <!-- Info -->

</div>

<?php
 $this->load->view('footer'); 
?>

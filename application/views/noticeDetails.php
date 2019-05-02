<?php
$this->load->view('header'); 
$this->load->helper('url');
$img_base = base_url();
$base = base_url() . index_page();
$sd = $notice['Country'];
$ld = $notice['Holidays'];
$area = $notice['Leavetype'];
$dateExp = $notice['Details'];

?>

<h2 class="center-text">Country details</h2>
<form id="form1" name="form17" method="post" enctype="multipart/form-data"  action="<?php echo "$base/Notice/insertNotice"; ?>">
  <p>
    <label for="shortDescription">Country</label>
    <input type="text" name="shortDescription" id="shortDescription" value="<?php echo $sd ?>" readonly />
  </p>
  <p>
    <label for="longDescription">Holidays</label>
    <input type="text" name="longDescription" id="longDescription" value="<?php echo $ld ?>" readonly />
	
  </p>
  
  <p>
    <label for="area">Leave Type</label> 
    <input type="text" name="area" id="area" value="<?php echo $area?>" readonly />
  </p>
  <p>
    <label for="dateExp">Details</label>
    
	<textarea name="dateExp" id="dateExp" readonly cols="45" rows="5"><?php echo $dateExp ?></textarea>
  </p>
 
</form>

<?php
$this->load->view('footer'); 
?>

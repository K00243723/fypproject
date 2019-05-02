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

<h1 class="center-text">Country details</h1>
<form id="form16" name="form1" method="post" enctype="multipart/form-data"  action="<?php echo "$base/Notice/saveNoticeDetails/" . $notice['Country']; ?>">
  <p>
    <label for="shortDescription">Country</label>
    <input type="text" name="shortDescription" id="shortDescription" value="<?php echo $sd ?>" readonly />
  </p>
  <p>
    <label for="longDescription">Holidays </label> 
    <input type="text" name="longDescription" id="longDescription" value="<?php echo $ld?>"/>
  </p>
<p>
    <label for="area">Leave Type</label> 
    <input type="text" name="area" id="area" value="<?php echo $area?>"/>
  </p>
  <p>
    <label for="dateExp">Details</label>
    <textarea name="dateExp" id="dateExp"  cols="45" rows="5"><?php echo $dateExp ?></textarea>
  </p>

   <input type="submit" name="button" id="button" value="Submit" />
</form>
<?php
$this->load->view('footer'); 
?>
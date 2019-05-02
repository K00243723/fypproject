<?php
$this->load->view('header'); 
$this->load->helper('url');
$img_base = base_url();
$base = base_url() . index_page();
$co = $benefit['Country'];
$ho = $benefit['Holidays'];
$lt = $benefit['Leavetype'];
$det = $benefit['Details'];

?>




<h2 class="center-text">Selected country benefit details</h2>
<form id="form15" name="form1" >
  <p>
    <label for="Country">Country :</label>
    <input type="text" name="Country" id="Countries" value="<?php echo $co ?>" readonly />
  </p>
  <p>
    <label for="Holidays">Holidays weeks :</label>
    <input type="text" name="Holidays" id="Holidays"  value="<?php echo $ho ?>" readonly />
  </p>
  <p>
    <label for="Leavetype">Leavetype :</label> 
    <input type="text" name="Leavetype" id="Leavetype" value="<?php echo $lt?>" readonly />
  </p>
  <p>
    <label for="Details" id="detail">Details :</label>
	<textarea name="Details" id="Details"  readonly cols="45" rows="5"><?php echo $det ?></textarea>
  </p>
 
</form>

<?php
$this->load->view('footer'); 
?>
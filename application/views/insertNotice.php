<?php
$this->load->view('header'); 
$this->load->helper('url');
$base = base_url() . index_page();
?>

<h1 class="center-text">Create details</h1>
<form id="form12" name="form1" method="post" enctype="multipart/form-data"  action="<?php echo "$base/Notice/insertNotice"; ?>">
  <p>
    <label for="shortDescription">Country</label>
    <input type="text" name="shortDescription" id="shortDescription" />
  </p>
  <p>
    <label for="longDescription">Holidays </label>
    <input type="text" name="longDescription" id="longDescription" />
  </p>
  
  <p>
    <label for="area">Leavetype</label>
    <input type="text" name="area" id="area" />
  </p>
  <p>
    <label for="dateExp">Details</label>
    <textarea name="dateExp" id="dateExp" cols="45" rows="5"></textarea>
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Submit" />
  </p>
</form>
<?php
$this->load->view('footer'); 
?>
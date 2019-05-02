<?php
$this->load->helper('url');
$base = base_url() . index_page();
$this->load->view('header'); 
?>
<div id="adminlogin">
<h2>Admin Login</h2>
<form id="form1" name="form1" method="post" action="<?php echo "$base/User/getUser"; ?>">
  <p>
    <label for="username" id="user1">User Name</label>
    <input type="text" name="UserName" id="username12" />
  </p>
  <p>
    <label for="password" id="pass1">Password</label>
    <input type="password" name="password" id="pass12" />
  </p>
  <p>
    <input type="submit" name="button" id="button1" value="Submit" />
  </p>
</form>
</div>

<?php
$this->load->view('footer'); 
?>
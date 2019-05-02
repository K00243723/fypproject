<?php 
$this->load->helper('url'); 
$cssbase = base_url();
$img_base = base_url();
$base = base_url() . index_page();
$user = $this->session->userdata('user');
?>


</div>
<footer>
	Geetha Raju - K00243723
	<div class="login">
                       
			<a href="<?php echo "$base/User/DoLogon/"; ?>">Admin Login</a>
            </div>
</footer>
</div>
</body>
</html>
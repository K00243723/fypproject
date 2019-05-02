<?php
$this->load->view('header'); 
$this->load->helper('url');
$base = base_url() . index_page();
$img_base = base_url();
?>

<h1 class="center-text">User Home Page</h1>
<p class="center-text">Hi <?php
$user = $this->session->userdata('user');
$n = $this->session->userdata('noticeData');
echo $user['FirstName']; ?></p>
<p class="center-text">
	<a href="<?php echo "$base/User/getUpdateDetails/" . $user['UserID']; ?>">Edit Country Details</a>
	&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="<?php echo "$base/Notice/doInsertNotice/"?>">Add country</a>
	&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="<?php echo "$base/User/logout/"?>">Log out</a>
</p>

<?php
if(!$n==null){
?>
	<h2 class="center-text">Country details</h2>
	<table border="1">
		<th>Country</th>
        <th>Holidays</th>
        <th>Leave Type</th>
        <th>Details</th>
<?php
		foreach ($n as $notice){
			$Country = $notice['Country'];
			echo "<tr>";
				echo "<td> <a href=\"$base/Notice/getDrillDownNotice/". 
					$notice['Country'] . "\"> $Country</a> </td>";
				echo "<td>" . $notice['Holidays'] . "</td>";
				echo "<td>" . $notice['Leavetype'] . "</td>";
				echo "<td>" . $notice['Details'] . "</td>";
				echo "<td>	<a href=\"$base/Notice/doEditNotice/". $notice['Country'] . "\">Edit" ."<br>";
				echo "<a href=\"$base/Notice/deleteNotice/". $notice['Country'] . "\">Delete	</td>" ;  
			echo "</tr>";
		}
?>
	</table>
  <?php } ?>              

<?php
$this->load->view('footer'); 
?>
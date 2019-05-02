<?php
$this->load->view('header'); 
$this->load->helper('url'); 
$base = base_url() . index_page();
$img_base = base_url();
$b = $this->session->userdata('AllBenefitData');

if(!$b==null){ ?>
 			
          <div id="content">
        <h2> Different countries Benefit Details </h2>         
           
	<table border="3" align="center">
		<th width="330">Country</th>
        <?php foreach ($b as $benefit){
			echo "<tr>";
			    echo "<td width=\"130\">";
				echo "<a href=\"$base/Notice/getDrillDownBenefit/". 
					$benefit['Country'] . 
					"\">";
				echo $benefit['Country'];
				echo "</a>";
				echo "</td>";
     	    echo "</tr>";
		}?>
    </table>
<?php } ?>                
</div>
<?php
$this->load->view('footer'); 
?>

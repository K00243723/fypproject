<?php
$this->load->view('header'); 
$this->load->helper('url'); 
$base = base_url() . index_page();
$img_base = base_url();
$n = $this->session->userdata('AllNoticeData');
?>



            <div id="flag">
            <h2>Calculate your Benefits</h2>
                         
                   <img src="<?php echo $img_base."assets/images/map2.png"?>" width="200" height="100" alt="flagimage" title="flags"/>
              
				<form id="form" name="form" method="post" action="<?php echo "$base/User/GetBenefit"; ?>">
                  <select id ="country" name="country">
                    <option value="selection">Select your country</option>
                    <option value="ir">Ireland</option>
                    <option value="uk">UK</option>
                    <option value="us">USA</option>
                    <option value="fi">Finland</option>
                    <option value="ge">Germany</option>
                  </select>
                  <br><br>
				  <img src="<?php echo $img_base."assets/images/calender1.png"?>" width="120" height="85" alt="calenderimage" title="calender"/>
				  <input id= "calendertext" type="text" placeholder="No of days" name="calender" readonly>
				  <img src="<?php echo $img_base."assets/images/currency5.png" ?>"width="110" height="80" alt="currencyimage" title="currency"/>
                  <input id="currencytext" type="text" placeholder="currency" name="currency" readonly >

				 <input type="submit" value="Submit">
                </form>
            </div>

             
            <div id ="picture">
                <h3>Share</h3> 
              <div id="facebook">
                   
              <a href="https://www.facebook.com"><img src="<?php echo $img_base."assets/images/facebook.png"?>" width="40" height="30" alt="facebookimage" title="facebookpics"/> </a>
			  
              </div>
            <div id="twitter">
                
              <a href ="https://twitter.com/"><img src="<?php echo $img_base."assets/images/twitter.png"?>" width="30" height="30" alt="twitterimage" title="twitterpics"/> </a>
            </div>
               <div id="images">
                <img src="<?php echo $img_base."assets/images/logo2.png"?>" width="210" height="160" alt="twitterimage" title="twitterpics"/>
              
            </div>
                <div id="fam">
                    <img src="<?php echo $img_base."assets/images/family3.jpeg"?>" width="290" height="200" alt="currencyimage" title="currency"/>
                </div>
                
            </div>
            <div id="link">
                <a href="https://www.citizensinformation.ie/en/employment/employment_rights_and_conditions/leave_and_holidays/parental_leave.html"><b>How to apply for parental leave</b></a><br><br>
                
                <a href="https://publicholidays.ie/2019-dates/"><b>Public holidays</b> </a>
            </div>


<?php
$this->load->view('footer'); 
?>
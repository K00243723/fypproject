<?php
$this->load->view('header'); 
$this->load->helper('url'); 
$base = base_url() . index_page();
$img_base = base_url();
$n = $this->session->userdata('AllNoticeData');
?>


 <div id="compare">
            <h2>Data Analytics</h2>
                         
                   <img src="<?php echo $img_base."assets/images/map7.png"?>" width="510" height="280" alt="flagimage" title="flags"/>
               <!-- <form action="/action_page.php">
                  <select id ="com" name="compare">
                    <option value="selection">Select </option>
                    <option value="ireland">Top 10 parental benefit countries</option>
                    <option value="uk">least countries</option>
                    <option value="usa">Top 10 maternity benefit countries</option>
                    
                  </select>
                  <br><br>
                  
                </form>-->
				</div>
				 <div id ="like">
                <h3>Share</h3> 
              <div id="facebook1">
                   
              <a href="https://www.facebook.com"><img src="<?php echo $img_base."assets/images/facebook.png"?>" width="40" height="30" alt="facebookimage" title="facebookpics"/> </a>
              </div>
            <div id="twitter1">
                
              <a href ="https://twitter.com/"><img src="<?php echo $img_base."assets/images/twitter.png"?>" width="30" height="30" alt="twitterimage" title="twitterpics"/> </a>
         
   </div>
               <div id="images1">
                <img src="<?php echo $img_base."assets/images/logo2.png"?>" width="210" height="160" alt="twitterimage" title="twitterpics"/>
              
            </div>
                <div id="fam1">
                    <img src="<?php echo $img_base."assets/images/family2.jpeg"?>" width="290" height="200" alt="familyimage" title="family"/>
                </div>
				</div>
				
            <div id ="graphs">
			<div id ="parentalpocilities">
			
                         
                   <img src="<?php echo $img_base."assets/images/parentalgraph.png"?>" width="410" height="280" alt="flagimage" title="flags"/>
               
            </div>
			<div id ="maternitybenfit">
			
                         
                   <img src="<?php echo $img_base."assets/images/maternitygraph.png"?>" width="410" height="280" alt="flagimage" title="flags"/>
               
            </div>
			<div id ="paternitypocilities">
			
                         
                   <img src="<?php echo $img_base."assets/images/paternitygraph.png"?>" width="410" height="280" alt="flagimage" title="flags"/>
               
            </div>
          </div>
                
           
			

<?php
$this->load->view('footer'); 
?>
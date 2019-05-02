<?php
$this->load->view('header'); 
$this->load->helper('url'); 
$base = base_url() . index_page();
$img_base = base_url();
$cssbase = base_url();
$n = $this->session->userdata('AllNoticeData');
?>

<section>

<div id="familypic">
                
				 <img src="<?php echo $img_base."assets/images/pic3.jpg"?>" width="870" height ="450" alt ="familyimage" title ="familyimage"/> 
            </div>
			<div id="share1">
                  
                <h3>Share</h3> 
             <!-- <div id="facebook1">
                   
              <a href="https://www.facebook.com"><img src="<?php echo $img_base."assets/images/facebook.png" ?>" width="40" height="30" alt="facebookimage" title="facebookpics"/> </a>
              </div>
            <div id="twitter12">
                
              <a href ="https://twitter.com/"><img src="<?php echo $img_base."assets/images/twitter.png"?>" width="30" height="30" alt="twitterimage" title="twitterpics"/> </a>
            </div>
               <div id="images1">
                <img src="<?php echo $img_base."assets/images/logo2.png"?>"width="210" height="150" alt="image" title="pics"/>
              
            </div>-->
              <div id="family">
                <img src="<?php echo $img_base."assets/images/family5.jpeg" ?>"width="315" height="730" alt="familyimage" title="familypics"/>
              
            </div>
          
            </div>
          <div id="con">
               
            <div id="pa">
                <h2>Parental Leave </h2>
                
            <p>Parental leave can benefit mothers and fathers and, especially,
                children.Taking leave helps women recover from pregnancy and
						childbirth, is good for child health, and increases female
			employment, which in turn reduces the family’s poverty
				risk. 

					Fathers are more likely to take paid parental leave if encouraged by “daddy quotas” or bonus months.</p>
 <div id="parentalimg">
                    <a href="<?php echo "$base/User/DoParental/"; ?>">
						<img src="<?php echo $img_base."assets/images/fam1.jpg"?>" width="375" height="250" alt="parentalimage" title="parentalpics"/>
					</a>
              </div>
              </div>
               
                

                
<div id="ma">
                <h2> Maternity leave</h2>
                
            <p>All female employees are entitled to maternity leave from work immediately before and after the birth of their child.
                A period of approved absence for a female employee granted for the purpose of giving birth and taking care of infant children. Maternity leave may last anywhere from several weeks to a period of months depending on the organizations. </p>
              <div id="maternityimg">
                  
                 <a href="<?php echo "$base/User/DoMaternity/"; ?>">
				 <img src="<?php echo $img_base."assets/images/mother2.jpg"?>" width="375" height="250" alt="maternityimage" title="maternitypics"/>
				 </a>
              </div>
			  </div>
              
                <div id="pat">
                <h2> Paternity leave</h2>
                    <p> Paternity Leave is for biological fathers only. You take it after the baby is born. 
                    This a period of time that a father is legally allowed to be away from his job so that he can spend time with his new baby.
                     Paternity Leave is for biological fathers only. You take it after the baby is born. You can take a parental leave after your paternity leave.</p>
					 <div id="paternityimg">
                     <a href="<?php echo "$base/User/DoPaternity/"; ?>"><img src="<?php echo $img_base."assets/images/parental2.jpg"?>" width="375" height="250" alt="parentalimage" title="parentalpics"/></a>
            
              </div>
			  
              </div>
              
           </div>
		   </section>
		   
               

<?php
$this->load->view('footer'); 
?>
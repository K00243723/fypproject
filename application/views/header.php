<?php 
$this->load->helper('url'); 
$cssbase = base_url();
$img_base = base_url();
$base = base_url() . index_page();
$user = $this->session->userdata('user');
?>

<!DOCTYPE>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Local Notice - Your local notice board</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700" rel="stylesheet" type="text/css" />
<link href="<?php echo $cssbase . "/assets/css/index.css"?>" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo $cssbase . "/assets/css/main.css"?>" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo $cssbase . "/assets/css/benefit.css"?>" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo $cssbase . "/assets/css/analytics.css"?>" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo $cssbase . "/assets/css/admin.css"?>" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo $cssbase . "/assets/css/parental1.css"?>" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo $cssbase . "/assets/css/maternity1.css"?>" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo $cssbase . "/assets/css/paternity1.css"?>" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo $cssbase . "/assets/css/benefitdetail.css"?>" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo $cssbase . "/assets/css/barchart.css"?>" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo $cssbase . "/assets/css/parentalbarchart.css"?>" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo $cssbase . "/assets/css/paternitybarchart.css"?>" rel="stylesheet" type="text/css" media="all" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js" charset="utf-8"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<body>
<div id="wrapper">
	<div id="header">
            
           <h1>Take <img src="<?php echo $img_base."assets/images/logo.png"?>" width="110" height ="90" alt ="logoimage" title ="logo"/> <span id="leave">Leave</span></h1>
            
           </div>
           <div id="nav">
               <div class="toggle">
                    <i class="fa fa-bars menu"></i>
                </div>
               <ul>
				   <li><a href="<?php echo "$base/User"; ?>">Home</a></li>
				  
				   <li><a href="<?php echo "$base/User/DoBenefits2/"; ?>">Benefits</a></li>
					<!--<li><a href="<?php echo "$base/User/DoAnalytics/"; ?>">Analytics</a></li>-->
					<!--<li><a href="<?php echo "$base/User/WriteBarchart1/"; ?>">Create Data</a></li>-->
					<li><a href="<?php echo "$base/User/DoBarchart1/"; ?>">Maternity Barchart</a></li>
					<!--<li><a href="<?php echo "$base/User/WriteBarchart2/"; ?>">Create Parentaldata</a></li>-->
					<li><a href="<?php echo "$base/User/DoBarchart2/"; ?>">Parental Barchart</a></li>
					<!--<li><a href="<?php echo "$base/User/WriteBarchart3/"; ?>">Create Paternitydata</a></li>-->
					<li><a href="<?php echo "$base/User/DoBarchart3/"; ?>">PaternityBarchart</a></li>

                   
               </ul>
               <script src="https://code.jquery.com/jquery-3.3.1.js"> </script>
                <script>
                    $(document).ready(function() {
                        $('.menu').click(function() {
                            $('ul').toggleClass('active');

                        })
                    })
                </script>
               </div>
               <div class="search">
                    <form>
                        <input class= "searchbutton" type="text" placeholder="Search" name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
               </div>
	<p>&nbsp;</p>
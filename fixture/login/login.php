<!doctype html>
<?php
define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'sport');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $Name = mysqli_real_escape_string($db,$_POST['Name']);
      $Password = mysqli_real_escape_string($db,$_POST['Password']); 
      
      $sql = "SELECT id FROM user WHERE Name = '$Name' and Password = '$Password'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
        
      if($count == 1) {
         header("location: ../services.php");
      }else {
        
         $error = "Your Login Name or Password is invalid";
      }
   }
?>

<html>  
    <head>
    <title>Sports Fixture</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Play-Offs Responsive web template, Bootstrap Web Templates, Flat Web         Templates, Andriod Compatible web template, Smartphone Compatible web template, free webdesigns for         Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() {                             setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!--bootstrap-file-->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <!--custom-css-->
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <!--fonts-->
        <link href="http://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet"                       type="text/css">
        <!--js-->
        <script src="js/jquery.min.js"></script>
        <script src="js/responsiveslides.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
		<script src="js/ajax.js"></script> <!--added-->
		<script>window.jQuery || document.write ('<script src="/js/jquery-1.8.2.min.js">\x3C/script>')</script>
	</head>
    
    <body>
        <div class="header" id="home">
            <!--js-->   
            <script src="js/bootstrap.min.js"></script>
            <!--js-->
            <div class="banner">
                <div class="container">
                    <nav class="navbar navbar-default bg">
                        <!-- Brand and toggle get grouped for better mobile display -->
                          <div class="logo">
                              <a href="../index.php">Sports-<span>Fixture</span></a>
                        </div>
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed mod" data-toggle="collapse"                                  data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar wt"></span>
                            <span class="icon-bar wt"></span>
                            <span class="icon-bar wt"></span>
                          </button>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse bod" id="bs-example-navbar-collapse-1"> 
                            <ul class="nav navbar-nav navbar-right navigate">
                            <li><a href="../index.php#about" >ABOUT</a></li>
                            <li><a href="services.php" >SERVICES</a></li>
                            <li><a href="reg.php" >LOGIN</a></li>
						    <li><a href="reg.php" >REGISTER</a></li>
                            <li><a href="index.php#contact" >CONTACT</a></li>
                          </ul>
                        </div><!-- /.navbar-collapse -->
                          <div class="clearfix"></div>
                <!--start-smoth-scrolling-->
                    </nav>
                <script type="text/javascript" src="js/move-top.js"></script>
                <script type="text/javascript" src="js/easing.js"></script>
                <script type="text/javascript">
                    jQuery(document).ready(function($) {
                        $(".scroll").click(function(event){		
                            event.preventDefault();
                            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                        });
                    });
                </script>
                <!--start-smoth-scrolling-->
            <div class="clear"></div>
            </div>
         </div>
        </div>
		<!---form starts here-->
        <form action="reg.php" method="POST">
		
    <link href="css/style2.css" rel="stylesheet" type="text/css" media="all"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Tab Sign In Form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'></head>
<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<!--web-fonts-->
<script src="js/jquery.min.js"></script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
				<script type="text/javascript">
					$(document).ready(function () {
						$('#horizontalTab').easyResponsiveTabs({
							type: 'default', //Types: default, vertical, accordion           
							width: 'auto', //auto or any width like 600px
							fit: true   // 100% fit in a container
						});
					});
				   </script>
<body>
		
		<!---main--->
			<div class="main-content-w3">
				<div class="sap_tabs-w3agile">	
					<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						<div class="tab">
							<ul>
								<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Register</span></li>
							<!--	<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Log In</span></li>-->
							</ul>
							</ul>
						</div>					
						<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
						<!---<p class="tab-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>-->
							<div class="register ">
								<form action="register/insert_part.php" method="post">											
									<input placeholder="Name" name="Name" class="user" type="text" required="">									
									<input placeholder="League" name="League" class="mess" type="text" required="">									
									<input placeholder="Password" name="Password" class="pass" type="password" required="">	
									<!---<input placeholder="Confirm Password" name="confirm_password" class="pass" type="password" required="">-->	
									<div class="select-section">
										
										<div class="clear"></div>
									</div>

									<div class="sign-up">
										<input type="submit" value="Sign Up">
									</div>
								</form>
							</div>
						</div>
						<!---<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
							
							<div class="register">
								<form action="#" method="post">	
									<input placeholder="Name" name="name" class="user" type="text" required="">
									<input placeholder="Password" name="Password" class="pass" type="password" required="">	
									<!---<span><input type="checkbox" name="Remember">Remember Me</span>
									<div class="sign-up">
										<input type="submit" value="Log In"/>
									</div>
								</form>
								<h3><a href="#"> Forgot your password or Email ?</a></h3>
							</div>
						</div> 
						-->
						</div> 
					</div>	
				</div>
			</div>
	

		<!---main--->

         <!--footer-->
            <div class="footer" id="foot">
                <div class="container">
                    <div class="col-md-3 logo flt">
                        <a href="#">Sports-<span>Fixture</span></a>
                    </div>
                    <div class="col-md-6 cpyrt fltt">
                        <p>Copyright &copy; 2017 - Sports Fixture - Designed by 
                        <a>Rubin Mathias & Ujval Kalal </a></p>
                    </div>
                    
                    <div class="clear"></div>
                </div>
            </div>
            <!--footer-->
			
		
    </body>
</html>


<!doctype html>
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
                              <a href="services.php">Sports-<span>Fixture</span></a>
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
                            <li><a href="services.php" >SERVICES</a></li>
                            <li><a href="index.php#about" >LOGOUT</a></li>
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
            <div class="container">
                <div class="about-para">
                    <h1>Generate Sports Fixture</h1>
                    <p>Please enter the league information and generate your fixture. </p>
                </div>
                <div class="about-grid">
                    <div class="col-md-4 grid lft">
                        <h4>Who's playing?</h4>
                        <p>Enter team names here one at a time, or import a list using the button</p>
						<p>Drag teams within the list to reorder them. The order given will define the seeds for a knockout	format (if used)</p>
							<label for="c_newteam">Add a team
						<input type="text" id="c_newteam" />
					</label>
					<span id="dup_team"></span>
					<section id="c_teams">
							<ol class="sortable"></ol>	<!-- calls sortable js package-->
					</section>	
					   <h4>Dates</h4>
					<p>What is the format of your competition?</p>
					<p>Does your competition have fixed dates? You can optionally enter a schedule here.</p>
						<label for="startdate">Enter the date of the first fixtures (dd/mm/yyyy)
							<input type="date" name="startdate" id="startdate" placeholder="dd/mm/yyyy" />
						</label><br />
							<input type="radio" name="period" value="day" />Daily<br />		
							<input type="radio" name="period" value="week" />Weekly<br />		
							<input type="radio" name="period" value="other" />Other		
						<div class="suboption">
							<label for="otherperiod">Days between each round	<!-- in fixture.js-->
								<input type="number" id="otherperiod" name="otherperiod" disabled />
							</label>
						</div>
					</div> 
                    </div>
					
                    <div class="col-md-4 grid cen">
                        <h4>Let's give it a name</h4>
					<p>Pick a title (and optional sub-title) for your competition</p>
					<label for="c_title">Title
						<input type="text" id="c_title" /><br>
					</label><br>
					<label for="c_subtitle">Subtitle
						<input type="text" id="c_subtitle" /><br>
					</label>  <br>                  
					<h4>Output</h4>
				<section id="schedule">
					<p id="OutputPara">No content, enter at least two teams and choose a format</p>
				</section>
					</div>
                    <div class="col-md-4 grid rgt">
									<section id="formats">
				<!--Fixture.js formats inpur function line 13-->
                        <h4>Format</h4>		
					<p>What is the format of your competition?</p>
									<label for="c_format">Round-robin
						<input type="radio" value="rr" name="c_format" />
					</label><br />
					<label>Direct Elimination
						<input type="radio" value="de" name="c_format" />
					</label>
					<div class="suboption" id="rr_options" style="display: none;">
						<label>One round
							<input type="radio" checked value="oneround" name="rr_sub" />
						</label><br>
						<label>Home and Away
							<input type="radio" value="homeaway" name="rr_sub" />
						</label><br>
					</div>
					<div class="suboption" id="de_options" style="display: none;">
						<label>Seeded
							<input type="radio" checked value="seeded" name="de_sub" />
						</label><br />
						<label>Random Draw
							<input type="radio" value="freedraw" name="de_sub" />
						</label><br />

					</div>
				</section>                  
                <div class="clear-fix"></div>
                </div>
            </div>
        </div>

		
            <!--footer-->
            <div class="footer" id="foot">
                <div class="container">
                    <div class="col-md-3 logo flt">
                        <a href="#">Sports-<span>Fixture</span></a>
                    </div>
                    <div class="col-md-6 cpyrt fltt">
                        <p>Copyright &copy; 2017 - Sports Fixture - Designed by 
                        <a>Rubin Mathias & Ujval Kalal </a></p>
						<p id="dum"> </p>
                    </div>
                    
                    <div class="clear"></div>
                </div>
            </div>
            <!--footer-->
			
			
			<script src="js/jquery.sortable.min.js"></script>	
	<script type="text/javascript" src="js/functions.js"></script>
	<script type="text/javascript" src="js/League.js"></script>
	<script type="text/javascript" src="js/fixtures.js"></script>
	<script type="text/javascript" src="js/moment.min.js"></script>
	<script type="text/javascript">
		
		var league = new League();
		var list = $('#c_teams ol');	
		var dup_err = $('#dup_team');
		var c = '<li><span class="handle">::</span><span class="team_name">%s</span><div class="teamopts"><span class="team_edit">e</span><a href="#" class="team_delete">&times;</a></div></li>';

		$(document).ready(function() {
			initFixtures();
		})
	</script>
			
<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
    </body>
</html>
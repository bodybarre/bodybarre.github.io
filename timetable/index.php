<?php
	include '../header.php';
?>
			
			<nav class="navbar navbar-inverse" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>					
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li><a href="../about">About</a></li>
							<li class="active"><a href="../timetable">Timetable</a></li>
							<li><a href="../parties">Parties</a></li>
							<li><a href="../instructors">Instructors</a></li>
							<li><a href="../training">Instructor Training</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#">Blog</a></li>
							<li><a href="../contact">Contact</a></li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</nav>
		
			<div class="row margined-row">
				<div class="col-md-12">
					<img class="img-responsive" src="../images/timetable_banner.png" alt="Timetable page banner"/>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12 center">
					<iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=600&amp;wkst=2&amp;hl=en_GB&amp;bgcolor=%23000000&amp;src=bodybarretimetable%40gmail.com&amp;color=%23B1365F&amp;ctz=Europe%2FLondon" style=" border-width:0 " width="100%" height="600" frameborder="0" scrolling="no"></iframe>
				</div>
			</div>
<?php
	include '../footer.php';
?>

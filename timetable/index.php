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
							<li><a href="../corporate-events">Corporate Events</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="../studio-hire">Studio Hire</a></li>
							<li><a href="../contact">Contact</a></li>
						</ul>
					</div>
				</div>
			</nav>

			<div class="hidden-xs row margined-row">
				<div class="col-md-12">
					<img class="img-responsive" src="../images/timetable_banner.png" alt="Timetable page banner"/>
				</div>
			</div>

			<div class="row center">
				<iframe src="https://calendar.google.com/calendar/b/1/embed?showTitle=0&amp;showNav=0&amp;showDate=0&amp;showPrint=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=400&amp;wkst=2&amp;bgcolor=%23000000&amp;src=bodybarretimetable%40gmail.com&amp;color=%23B1365F&amp;ctz=Europe%2FLondon" style="border-width:0" width="800" height="400" frameborder="0" scrolling="no"></iframe>
			</div>
<?php
	include '../footer.php';
?>

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
					</div>
				</div>
			</nav>

			<div class="hidden-xs row margined-row">
				<div class="col-md-12">
					<img class="img-responsive" src="../images/timetable_banner.png" alt="Timetable page banner"/>
				</div>
			</div>

			<div class="row">
			<?php
				$xml = simplexml_load_file("timetable.xml") or die ("Unable to load timetable");
				foreach($xml->day as $day) {
					echo "<div class='col-md-4'>";
					echo "<h2 class='gold'>".$day["value"]."</h2>";
					foreach($day->studio as $studio) {
						echo "<table class='table table-condensed table-bordered'>";
						echo "<tr><td colspan='2'><h4>Studio #".$studio["value"]."</h4></td></tr>";
						foreach($studio->classes->class as $class) {
							echo "<tr>";
							echo "<td class='pink'>".$class->time."</td>";
							echo "<td><a href='".$class->link."'>".$class->title."</a><br/><i>".$class->booking."</i></td>";
							echo "</tr>";		
						}
						echo "</table>";
					}
					echo "</div>";
				}
			?>
			</div>
<?php
	include '../footer.php';
?>

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
							<li><a href="../timetable">Timetable</a></li>
							<li><a href="../parties">Parties</a></li>
							<li><a href="../instructors">Instructors</a></li>
							<li><a href="../training">Instructor Training</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#">Blog</a></li>
							<li class="active"><a href="../contact">Contact</a></li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</nav>

			<div class="hidden-xs row margined-row">
				<div class="col-md-12">
					<img class="img-responsive" src="../images/contact_banner.png"/>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-8">
					<h3 class="pink">Where are we?</h3>
					<p>
						On the hippest street in Central Manchester you will find the very luxurious,
						boutique styled fitness studio, perfectly placed in the hub of the vibrant and
						exciting Northern Quarter.
					</p>
				</div>
				<div class="col-xs-12 col-sm-4">
					<div id="map"></div>
				</div>
			</div>
			<script src="https://maps.googleapis.com/maps/api/js"></script>
			<script>
				google.maps.event.addDomListener(window, 'load', function(){
					var myLatlng = new google.maps.LatLng(53.484233, -2.236942);
					var mapOptions = {
						center: myLatlng,
						zoom: 16,
						mapTypeId: google.maps.MapTypeId.ROADMAP
					}
					var map = new google.maps.Map(document.getElementById('map'), mapOptions)
					new google.maps.Marker({
						 position: myLatlng,
						 map: map,
						 title: 'Bodybarre Manchester'
					});
				});
			</script>
<?php
	include '../footer.php';
?>

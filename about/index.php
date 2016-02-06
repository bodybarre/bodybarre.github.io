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
							<li class="active"><a href="../about">About</a></li>
							<li><a href="../timetable">Timetable</a></li>
							<li><a href="../parties">Parties</a></li>
							<li><a href="../instructors">Instructors</a></li>
							<li><a href="../training">Instructor Training</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="../blog">Blog</a></li>
							<li><a href="../contact">Contact</a></li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</nav>
			<div class="row">
				<div class="col-md-12">
					<div class="under-construction-about">
						This page is still under construction.
						<br/><br/>
						<i><span class="gold">In the mean time, here's our address!</span></i>
					</div>
				</div>
			</div>
			<hr/>
			<div class="row">
				<div class="col-xs-6">
					<div id="map"></div>
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
				</div>
				<div class="col-xs-6">
					<p class="pink" style="font-size:17px;"><i>Find us in Manchester's vibrant Nothern Quarter!</i></p>
					<br/>
					<address>
						<strong>Bodybarre Studio</strong><br/>
						2nd Floor<br/>
						35-37 Thomas Street<br/>
						Northern Quarter<br/>
						Manchester<br/>
						M4 1NA<br/>
					</address>
				</div>
			</div>
			
<?php
	include '../footer.php';
?>

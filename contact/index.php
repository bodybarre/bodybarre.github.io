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
							<li><a href="../blog">Blog</a></li>
							<li class="active"><a href="../contact">Contact</a></li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</nav>

			<div class="row">
				<div class="col-md-12">
					<div class="under-construction">
						This page is currently under construction.
						<br/><br/>
						<i><span class="gold">Check back soon!</span></i>
					</div>
				</div>
			</div>
			<br/>
			<div class="row">
				<div style="text-align:center; font-size:16px;" class="col-md-12">
					<p class="pink">
						In the mean time, contact karen@bodybarre.co.uk for any and all queries!
					</p>
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

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
							<li><a href="../corporate-events">Corporate Events</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="../studio-hire">Studio Hire</a></li>
							<li><a href="../contact">Contact</a></li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</nav>
			
			<div class="row">
				<div class="col-md-12">
					<h3 class="pink">Bodybarre Studio : Manchester</h3>
					<p>
						Bodybarre started out as the first Pole Fitness School in Manchester and have grown to offer so much more! We pride ourselves on being one of the most extraordinary Boutique Fitness Studios in Manchester!
					</p>
					<p>
						Our friendly expert teachers deliver high quality individually tailored tuition. We offer classes and courses over a flexible schedule allowing us to fit into your way of life. All Bodybarre instructors are committed to provide the best fitness experience available. Every session is informative and energising and has been beautifully crafted by top industry fitness professionals who are talented and inspiring.
					</p>
					<p>
						The mixture of fitness and dance performance are combined to create classes like you have never experienced before. The classes focus on those attending and are designed to suit, so that you can achieve the fitness results you are looking for. We also feel it is essential that all classes are enjoyable as this ensures participation remains focused and both eyes stay firmly fixed on the instructor rather than with one eye on the clock.
					</p>
					<p>
						Bodybarre classes are empowering, energising and carried out within a safe, friendly and informal environment.
					</p>
					<p class="gold">
						<i><b>Seduce your sole with head to toe wellness</b></i>
					</p>
				</div>
			</div>

			<hr/>

			<div class="row">
				<div class="col-md-6">
					<h3 class="pink">Karen Walker is the founder and inspiration behind Bodybarre</h3>
					<p>
						She has immersed herself in the world of fitness and dance all her life starting with gymnastics at 2 years old. Karen continued with gymnastics; training in Bulgaria and competing at regional squad level before becoming a club coach and chief choreographer by the age of 21. She also trained in martial arts and studied dance; performing at charity events as well as choreographing and performing at fashion shows. 
					</p>
					<p>
						She has made TV appearances as an Aerialist, Burlesque Dancer and Pole Dancer in commercials and TV programmes; with credits in Coronation Street, Shameless, Bollywood Film Awards, The Royal, and Dancing On Ice. She has also worked behind the camera as a choreographer and assistant costume designer. 
					</p>
					<p>
						Karen was also picked from thousands of hopefuls, and performed as a ground based and aerial dancer in what was the biggest show on earth at the Millennium Dome in London. 
					</p>
					<p>
						Karen went on to compete in many Pole Dance competitions and has won European and International titles, and placed third in the World Pole Sports Championships in London.
					</p>
					<p>
						Karen has trained many unique workout programmes and delivered classes such as Nike Rockstar and New York City Ballet Workout. She continues to deliver many new fitness creations to her clients, to ensure fitness is never boring, and that everyone is constantly challenged to guarantee healthy changes. 
					</p>
					<p class="gold">
						<i><b>Taking the ordinary and making it extraordinary</b></i>
					</p>
				</div>
				<div class="col-md-6">
					<img class="img-responsive" src="../images/karen.png" alt="Karen Walker"/>
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

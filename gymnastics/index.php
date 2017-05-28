<?php
	include '../header.php';
	include '../navigation.php';
?>

			<div class="hidden-xs row">
				<div class="col-md-12">
					<img class="img-responsive" src="../images/gymnastics_banner.png"/>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<h3 class="pink">Four Week Course - All levels and suitable for the absolute beginner</h3>
					<p>
						Learn basic gymnastic skills such as forward and backward rolls, cartwheels and
						more. The session consists of a warm-up, flexibility and strength conditioning
						exercises, followed by a skills session. Gymnastics will improve performance in all
						sports, as well as improving overall fitness and functional strength. It is fun.
					</p>
					<p class="gold">
						<i><b>You are never too old!</b></i>
					</p>
				</div>
				<div class="col-md-6">
					<h3 class="pink">Exercise Benefits</h3>
					<ul class="ticked-list">
						<li><span>Increase flexibility and strength</span></li>
						<li><span>Improve mental focus and concentration</span></li>
						<li><span>Develop strong bones</span></li>
						<li><span>Give your heart a workout</span></li>
						<li><span>Keep your weight under control</span></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<h3 class="pink">What to wear?</h3>
					<p>
						Regular fitness clothes that you can move in, layers to keep the body warm, and layers you can strip when warm! Bare feet.
					</p>
				</div>
				<div class="col-md-6">
					<h3 class="pink">When?</h3>
					<?php echo getClassTimesFor("Adult Gymnastics"); ?>
				</div>
			</div>
			<div class="row margined-row">
				<div class="col-md-6">
					<h3 class="pink">How to book?</h3>
					<p>Book in advance only; essential to secure your place.</p>
					<p>To check availability and to book a place, e-mail <span class="gold">karen@bodybarre.co.uk</span></p>
				</div>
				<div class="col-md-6">
					<h3 class="pink">How much?</h3>
					<p>This four week course costs £35.00</p>
				</div>
			</div>

<?php
	include '../footer.php';
?>

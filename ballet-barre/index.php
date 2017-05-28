<?php
	include '../header.php';
	include '../navigation.php';
?>
			
			<div class="hidden-xs row margined-row">
				<div class="col-md-12">
					<img class="img-responsive" src="../images/ballet_barre_banner.png" alt="Ballet Barre Banner"/>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<h3 class="pink">Four Week Course - All levels and suitable for the absolute beginner</h3>
					<p>
						Discover a graceful burn in our Ballet Barre Workout. This workout is all about strengthening 
						and lengthening your limbs alongside building a super strong core. 
					</p>
					<p>
						A non-stop 45 minute session 
						with no room for rest! You will be on the floor, on the mat, at the barre - and there is even 
						an option to wear ankle weights to power up your core workout!
					</p>
					<p>
						We will whip you into shape with this vigorous calorie burning 
						barre, using techniques from Pilates, Yoga and Ballet, plus there’s a few hip thrusts too!
					</p>
					<p class="gold">
						<i><b>Cue long, lean muscles…</b></i>
					</p>
				</div>
				<div class="col-md-6">
					<h3 class="pink">Exercise Benefits</h3>
					<ul class="ticked-list">
						<li><span>Increased muscle tone</span></li>
						<li><span>Decreased body fat</span></li>
						<li><span>Increased flexibility</span></li>
						<li><span>Increased spatial awareness and co-ordination</span></li>
						<li><span>Confidence boosting</span></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<h3 class="pink">What to wear?</h3>
					<p>
						Wear clothes you can move in, and bring some socks.
					</p>
				</div>
				<div class="col-md-6">
					<h3 class="pink">When?</h3>
					<?php echo getClassTimesFor("Ballet Barre"); ?>
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
					<p>This four week course costs £35.00.</p>
				</div>
			</div>

<?php
	include '../footer.php';
?>

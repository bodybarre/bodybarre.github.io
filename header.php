<?php 
	function getClassTimesFor($classTitle) {
		$result = "";
		$xml = simplexml_load_file("../timetable/timetable.xml") or die ("Unable to load webpage. Please contact karen@bodybarre.co.uk");
		foreach($xml->day as $day) {
			foreach($day->studio as $studio) {
				foreach($studio->classes->class as $class) {
					if($class->title == $classTitle) {
						$result =  $result."<p><b>".$day["value"]."</b>: <span class='gold'>".$class->time."</span></p>";
					}
				}
			}
		}
		return $result;
	}

	function getClassTimesWithLevelsFor($classTitle) {
		$result = "";
		$xml = simplexml_load_file("../timetable/timetable.xml") or die ("Unable to load webpage. Please contact karen@bodybarre.co.uk");
		foreach($xml->day as $day) {
			foreach($day->studio as $studio) {
				foreach($studio->classes->class as $class) {
					if($class->title == $classTitle) {
						$result =  $result."<p><b>".$day["value"]." (".$class->level.")</b>: <span class='gold'>".$class->time."</span></p>";
					}
				}
			}
		}
		return $result;
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Bodybarre | Pole Dance Courses | Dancing Lessons | Burlesque | Bombshells</title>
		<link rel="shortcut icon" href="../images/favicon.ico" />
		<meta name="keywords" content="fitness, classes, Pole, Burlesque, Aerial Hoop, Trapeze, Yoga, Pilates, Anti Gravity, Manchester" />
		<meta name="description" content="Welcome to Bodybarre, Manchester’s finest and most innovative Pole Dance, Burlesque and Aerial Fitness Studio. Located on the hippest street in Central Manchester you will find the very luxurious, boutique styled fitness studio." />
		<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="../css/normalize.css"/>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="../css/index.css"/>
	</head>
	<body>
		<div class="container">
			
			<div class="row">
				<!-- BodyBarre Logo" -->
				<div class="col-md-offset-4 col-md-4 margined-row">
					<a href="/bodybarre.co.uk"><img class="img-responsive" src="../images/logo.png" alt="Bodybarre Logo"/></a>
				</div>
			</div>

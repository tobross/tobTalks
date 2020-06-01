<!DOCTYPE html>
<html>
<head>
	<title>Seating Reservation | TOB Talks | Denver, CO</title>
	<meta charset="utf-8" description="The best place to go nowhere and learn nothing! - Tobez">
    <link rel="stylesheet" href="https://fh-kit.com/buttons/v2/?red=cc0000&orange=ff6000&green=3AB134" type="text/css" media="screen" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./styles/style.css"><link rel="stylesheet" href="https://fh-kit.com/buttons/v2/?red=cc0000&orange=ff6000&green=3AB134&white=ffffff&black=000000" type="text/css" media="screen" />
        <link rel="icon" href="https://cdn.filestackcontent.com/TPAB1EH5QvG64fSsZOPw" sizes="16x16" type="image/png">
</head>
<body>
	<header>
    	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand canClick" href="/fareharbor/index.php"><span class="logo" style="font-size: 26px !important; font-weight: 900 !important; color: red !important">TOB</span><span class="logo-sub" style="color: #999 !important;"> Ideas Worth Keeping To Himself</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav" style="position: relative !important; left: 50% !important;">
      <a class="nav-item nav-link active" href="#">WATCH <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">DISCOVER</a>
      <a class="nav-item nav-link" href="#">ATTEND</a>
      <a class="nav-item nav-link" href="#">PARTICIPATE</a>
      <a class="nav-item nav-link" href="#">ABOUT</a>
      <a class="nav-item nav-link sign-in" href="#" style="border-left: 1px solid #000 !important; border-right: 1px solid #000 !important;">SIGN IN</a>
      <a class="nav-item nav-link" href="#"><svg baseProfile="tiny" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 512 512" class="Main-nav__icon Main-nav__icon--search"><title>Search</title><path d="M221.414 12.31C105.96 12.31 12 106.164 12 221.475c0 115.34 93.96 209.202 209.452 209.202 41.684 0 80.52-12.4 113.205-33.512l89.652 89.576c17.304 17.267 45.413 17.267 62.697 0 17.342-17.322 17.304-45.374 0-62.677l-89.634-89.5c21.13-32.646 33.512-71.406 33.512-113.09-.02-115.31-93.92-209.163-209.47-209.163zm167.5 209.165c0 92.267-75.136 167.27-167.462 167.27-92.344 0-167.462-75.04-167.462-167.27 0-92.22 75.118-167.25 167.462-167.193 92.326 0 167.424 74.973 167.463 167.193z"></path></svg></a>
    </div>
  </div>
</nav>
    </header>
<div class="Theatre" style="background-color: #000 !important;">
	<?php 
	require_once 'connection.php';
	$sql = "SELECT * FROM seatingchart.seats";
	$link = new mysqli("localhost", "root", "root", "seatingchart");
	$result = mysqli_query($link, $sql);
	print("<div class='row unset header'><div class='col-sm-3'></div><center class='title col-sm-6'><h2 class='fh-button-outline-white fh-shape--round'><strong><span class='logo'>TOB</span> Talks</strong></h2><br></h5>Seating Chart</h5></center><div class='col-sm-3'></div></div>");
	print("<div class='row'>");
	while($seats = mysqli_fetch_array($result)){
		$row = "row" . $seats['line'];
		$location = "seat" . $seats['location'];
		$occupied = "occupied" . $seats[occupied];
		$text = $seats['buttontext'];
		$type = $seats['buttontype'];

		if ($location == "seat9"){
			echo "<div class='col-sm-1 seat " . $row . " " . $location . " " . $occupied . "' id='" . $seats['id'] . "'>R" . $seats['line'] . " S" . $seats['location'] . "<br><a href='" . $text . ".php?id=" . $seats['id'] . "'><button class='btn btn-" . $type . "'>" . $text . "</button></a></div></div><div class='row'>";
		}else if(($location == "seat3")||($location == "seat6")){
			echo "<div class='col-sm-1 seat " . $row . " " . $location . " " . $occupied . "' id='" . $seats['id'] . "'>R" . $seats['line'] . " S" . $seats['location'] . "<br><a href='" . $text . ".php?id=" . $seats['id'] . "'><button class='btn btn-" . $type . "'>" . $text . "</button></a></div><div class='col-sm-1 walkway'></div>";
	}else {
			echo "<div class='col-sm-1 seat " . $row . " " . $location . " " . $occupied . "' id='" . $seats['id'] . "'>R" . $seats['line'] . " S" . $seats['location'] . "<br><a href='" . $text . ".php?id=" . $seats['id'] . "'><button class='btn btn-" . $type . "'>" . $text . "</button></a></div>";
	};
	}

	?>
</div>
<div class="row unset realfooter">
	<div class="col-md-12">
		<center>
			<h5>
			Didn't get the row or seat that you wanted for your special event?</h5><br> <p>Don't worry! We've got several options for you below!
		</p>
		</center>
	</div>
</div>
<div class="row unset bbText">
	<div class="col-md-3 walkway">
		<center>
		<ul style="list-style-type: none !important;">
			<li>
				<strong>
					<p>
						Are you the Fighting type? Get drunk and...
					</p>
				</strong>
			</li>
			<li>
				<a href="#" class="fh-button-true-flat-red fh-shape--round fh-size--small fh-icon--beer " >Fight for the Seat!</a>
			</li>
		</ul>
	</center>
	</div>
	<div class="col-md-3  walkway">
		<center>
			<ul class="no-style">
				<li>
					<strong>
						<p>
							Are you a pacifist?
						</p>
					</strong>
				</li>
				<li>
					<a href="/fareharbor/talks.php" class="canClick fh-button-true-flat-white fh-size--small fh-shape--round fh-icon--calendar-check" >Book A Different Event</a>
				</li>
			</ul>
		</center>
	</div>
	<div class="col-md-3  walkway">
		<center>
			<ul class="no-style">
				<li>
					<strong>
						<p>
							Did you not want to come here in the first place?
						</p>
					</strong>
				</li>
				<li>
					<a href="#" class="fh-button-true-flat-red fh-size--small fh-shape--round fh-icon--arrow" >Just Leave!</a>
				</li>
			</ul>
		</center>
	</div>
	<div class="col-md-3  walkway">
		<center>
			<ul class="no-style">
				<li>
					<strong>
						<p>
							Pacifist with money? Pay us and we will...
						</p>
					</strong>
				</li>
				<li>
					<a href="#" class="fh-button-true-flat-white fh-size--small fh-shape--round fh-icon--dollar" >Remove Them</a>
				</li>
			</ul>
		</center>
	</div>
</div>
<div class="row unset realfooter">
                	<div class="col-sm-1">
                		<center>
                		<span class="logo">TOB</span>
                	</center>
                	</div>
                	<div class="col-sm-2">
                		<ul style="list-style-type: none !important;">
                			<li>
                				<strong><p>
                					Programs & Initiatives
                				</p></strong>
                			</li>
                			<li>TOBx</li>
                			<li>TOB Fellows</li>
                			<li>TOB Ex</li>
                			<li>TOB Translators</li>
                			<li>TOB Books</li>
                			<li>TOB Institute</li>
                			<li>The Audacious Project</li>
                		</ul>
                	</div>
                	<div class="col-sm-2">
                		<ul style="list-style-type: none !important;">
                		<li>
                			<strong>
                				<p>
                					Ways to get TOB
                				</p>
                			</strong>
                		</li>
                		<li>Podcasts</li>
                		<li>More ways to get TOB</li>
                		</ul>
                	</div>
                	<div class="col-sm-2">
                		<ul style="list-style-type: none !important;">
                		<li>
                			<strong>
                				<p>
                					Follow TOB
                				</p>
                			</strong>
                		</li>
                		<li>Facebook</li>
                		<li>Twitter</li>
                		<li>Pinterest</li>
                		<li>Instagram</li>
                		<li>YouTube</li>
                		<li>TOB Blog</li>
                		</ul>
                	</div>
                	<div class="col-sm-2">
                		<ul style="list-style-type: none !important;">
                		<li>
                			<strong>
                				<p>
                					Our Community
                				</p>
                			</strong>
                		</li>
                		<li>TOB Speakers</li>
                		<li>TOB Fellows</li>
                		<li>TOB Translators</li>
                		<li>TOBx Organizers</li>
                		<li>TOB Community</li>
                		</ul>
                	</div>
                	<div class="col-sm-3" style="border-left: 2px solid #000;">
                		<ul style="list-style-type: none !important;">
                		<li>
                			<strong>
                				<p>
                					Want personalized reccomendations?
                				</p>
                			</strong>
                		</li>
                		<li>Join <STRONG>TOB Reccomends</STRONG> and get the worst ideas selected for someone else.</li>
                		<li>
                			<br>
                			<a href="#" class="fh-button-true-flat-black" >Get Started</a>
                		</li>
                		</ul>
                		
                	</div>
                	<div class="col-sm-2"></div>
                </div>

                
            </div>
</div>
                 <footer>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script src="https://fareharbor.com/embeds/api/v1/?autolightframe=yes"></script>
    </footer>
</body>
</html>
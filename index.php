<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>ART World Congress</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <?php $page = 'home';
  include('includes/css.php'); ?>  
  
</head>
<body>
	<?php include('includes/nav.php'); ?>
	<div id="wrapper">
	<h2>Annual Symposium on:</h2>
	<h1>An Optimal Approach to Assisted Reproductive Technology</h1>
    
    <h3>September 6-7, 2014<br />
    Shanghai, China</h3>
    
    <div class="rslides_container">
      <ul class="rslides" id="slider">
        <li><img src="img/1.jpg" alt=""></li>
        <li><img src="img/2.jpg" alt=""></li>
        <li><img src="img/3.jpg" alt=""></li>
      </ul>
    </div>
    
    <h4>Organizers</h4>
    <p class="organizers">Dr. Yanping Kuang, <a href="http://www.9hospital.com" target="_blank">Ninth People's Hospital</a>, Shanghai, China</p>
    <p class="organizers">Dr. John Zhang, <a href="http://www.newhopefertility.com" target="_blank">New Hope Fertility Center</a>, New York, USA</p>
    <p class="organizers">Dr. Keichi Kato, <a href="http://www.towako-kato.com" target="_blank">Kato Ladies Clinic</a>, Tokyo, Japan</p>
    <br />
    <h2><a href="schedule/" style="color:#999;">Check out the schedule</a></h2>
    
  </div>
  <?php include('includes/js.php'); ?>
  <script src="js/responsiveslides.min.js"></script>
  <script>
    // You can also use "$(window).load(function() {"
    $(function () {
		$("#slider").responsiveSlides({
			auto: true,             // Boolean: Animate automatically, true or false
			speed: 1500,            // Integer: Speed of the transition, in milliseconds
			timeout: 5000,          // Integer: Time between slide transitions, in milliseconds
			pager: true,           // Boolean: Show pager, true or false
			nav: true,             // Boolean: Show navigation, true or false
			random: false,          // Boolean: Randomize the order of the slides, true or false
			pause: false,           // Boolean: Pause on hover, true or false
			pauseControls: true,    // Boolean: Pause when hovering controls, true or false
			prevText: "Previous",   // String: Text for the "previous" button
			nextText: "Next",       // String: Text for the "next" button
			maxwidth: 1000,           // Integer: Max-width of the slideshow, in pixels
			navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
			manualControls: "",     // Selector: Declare custom pager navigation
			namespace: "rslides",   // String: Change the default namespace used
			before: function(){},   // Function: Before callback
			after: function(){},    // Function: After callback
			namespace: "transparent-btns"
		});
    });
  </script>
</body>
</html>

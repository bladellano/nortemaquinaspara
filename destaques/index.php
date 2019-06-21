<link rel="stylesheet" type="text/css" href="destaques/css/sliderwall_bullets_skin.css"/>	 
<link rel="stylesheet" type="text/css" href="destaques/css/slideshow_sample.css"/>	
<script type="text/javascript" src="destaques/javascript/jquery-1.7.1.min.js"></script> 		 
<script type="text/javascript" src="destaques/javascript/sliderwall-bullets-1.1.2.js"></script>	 

<script type="text/javascript">
var mySlider;	// A reference to the SliderWall instance.
var err;
// Initialize the slider.
$(document).ready(function() {
	try {
		// imageSlideshow is the id of the <div> tag that will contain the SliderWall instance.
		$("#imageSlideshow").sliderWallBullets({
			// general options
			cssClassSuffix: "",
			domainKeys: "",
			imageAlign: "middleCenter", /* topLeft, topCenter, topRight, middleLeft, middleCenter (default), middleRight, bottomLeft, bottomCenter, bottomRight */
			imageScaleMode: "stretch", /* scale, scaleCrop (default), crop, stretch */
			loopContent: true,
			rssFeed: null,
			selectableContent: true,
			
			// slideshow options
			autoSlideShow: true, 
			slideShowSpeed: 6,
			
			// timer control options
			showTimer: false, /*LINHA CORRENDO*/
			timerPosition: "belowControlBar", /* aboveControlBar, belowControlBar (default) */
			
			// control bar options
			autoHideControlBar: false, 
			controlsHideDelay: 5,
			controlsShowHideSpeed: 0.2,
			showControlBar: false, /*BOLINHAS APARECENDO*/
			
			// navigation options
			autoHideNavButtons: false, /*SETAS APARECENDO*/
			showNavigationButtons: true,
			
			// text options
			autoHideText: true,
			
			// interaction options
			useGestures: true,
			useKeyboard: true,
			useMouseScroll: true,
			pauseOnMouseOver: false,
			disableAutohideOnMouseOver: true,
			
			// transitions
			transitionType: {
				optimizeForIpad: false,  /* If set to true, it would use only the Alpha and Slide effects. */
				random: false,
				transitions: [
			
					{
						name: "Alpha",
						duration: 0.75,
						tweenType: "Expo",
						easing: "easeInOut"
					}
					]
				},

			// callback functions
			init: null,
			contentLoadStart: null,
			contentLoadComplete: null,
			contentLoadError: null,
			contentShow: null,
			contentHide: null,
			slideClick: null,
			slideshowStart: null,
			slideshowStop: null,
			pageChange: null
		});

		mySlider = $("#imageSlideshow").data("sliderWall");
		
	} catch(err) { /* handle any error messages */ }
});
</script>
</head>

<body>
	<div id="main">
		
		<div id="imageSlideshow">

			<div rel="slider_content" style="display: none;"> 
				<?php
				include('includes/conecta.php');

				$declar = "SELECT* FROM tbl_destaques ORDER BY id DESC LIMIT 12";
				$query = mysqli_query($con, $declar);

				while($row = mysqli_fetch_array($query)) { 

					$dia = substr($row['data_ent'],8,2);
					$mes = substr($row['data_ent'],5,2);
					$ano = substr($row['data_ent'],0,4);
					?>

					<div rel="slide">  
						<div rel="type">image</div>  
						<div rel="title"><?php echo $row["titulo"]; ?></div> 
						<div rel="content">admin/<?php echo $row["arquivo"]; ?></div>  
						<div rel="target_url">view_destaques.php?id=<?php echo $row['id']; ?></div>  
						<div rel="target_window">_blank</div> 
					</div>

					<?php } ?>

				</div>
			</div>
		</div> <!-- end SliderWall definition and structure -->
	</div>

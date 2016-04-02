<?php 
class headerfile{

	public function __construct(){

	}

	public function render(){
            echo <<<EOD
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="css/menu.css" rel="stylesheet" type="text/css" />
<link href="css/slider.css" rel="stylesheet" type="text/css" />
<link href="css/css_slider1/default.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/css_slider1/nivo-slider.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/hover.css" rel="stylesheet" type="text/css" />
<link href="css/columns.css" rel="stylesheet" type="text/css" />
<link href="css/hover_image.css" rel="stylesheet" type="text/css" />
<link href="css/lightbox.css" rel="stylesheet" type="text/css" />
<link href="css/buttons.css" rel="stylesheet" type="text/css" />
<link href="css/widgets.css" rel="stylesheet" type="text/css" />
<link href="css/light.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/stimenu.css" />
<link rel="stylesheet" type="text/css" href="css/responsive.css" />


<!--[if IE 8]>
<link href="css/style_IE.css" rel="stylesheet" type="text/css">
<![endif]-->
<script type="text/javascript" src="js/ie.html5.js"></script>


<!-- JQUERY -->
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

<!-- JQUERY_UI -->
<script type="text/javascript" src="js/jquery.ui.core.js"></script>

<!-- SLIDER 
<script type="text/javascript" src="js/jquery.cycle.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$("#scroller .items").cycle({ 
    		fx: 'scrollUp' 	
		});
	});
</script>
-->

<!-- SLIDER_NIVO --> 
<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('.nivo_slider').nivoSlider({
			manualAdvance: true,
			directionNavHide:true});
    });
</script>


<!-- SLIDER_PIECEMAKER 
<script type="text/javascript" src="js/swfobject.js"></script>
-->
<!-- SLIDER_ROUNDABOUT 
<script type="text/javascript" src="js/jquery.featureCarousel.min.js"></script>
-->

<!-- MENU -->
<script type="text/javascript" src="js/menu.js"></script>

<!-- SERVICES
<script type="text/javascript" src="js/jquery.quicksand.js"></script>
<script type="text/javascript" src="js/services.js"></script>
 -->
 
<!-- HOVER_BUTTON -->
<script type="text/javascript" src="js/hover.js"></script>
<script type="text/javascript" src="js/buttons.js"></script>

<!-- IMAGE -->
<script src="js/image.js" type="text/javascript"> </script>
<script src="js/lightbox.js" type="text/javascript"></script>
<script src="js/jquery.capSlide.js" type="text/javascript"></script>

<!-- GALLERY -->
<script src="js/lazyload.js" type="text/javascript"></script>
<script src="js/gallery.js" type="text/javascript"> </script>
<script src="js/jquery.masonary.js" type="text/javascript"> </script>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
EOD;
	}
}
?>

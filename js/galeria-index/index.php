<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
    <title>Feature Carousel Demonstration Test</title>
    <link rel="stylesheet" href="css/feature-carousel.css" charset="utf-8" />
    <script src="js/jquery-1.5.1.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/jquery.featureCarousel.min.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
		$(document).ready(function() {
			$("#carousel").featureCarousel({
			// include options like this:
			// (use quotes only for string values, and no trailing comma after last option)
			// option: value,
			// option: value
			});
		});
    </script>
</head>
<body>
  
    <div id="carousel-container">
        <div id="carousel">
            <div class="carousel-feature">
	            <a href="http://www.globo.com">
                	<img class="carousel-image" alt="Image Caption" src="../../img/imgGaleriaIndex.png" />
                </a>
            </div>
            <div class="carousel-feature">
    	        <a href="http://www.globo.com">
                	<img class="carousel-image" alt="Image Caption" src="../../img/imgGaleriaIndex.png" />
                </a>
            </div>
            <div class="carousel-feature">
        	    <a href="http://www.globo.com">
                	<img class="carousel-image" alt="Image Caption" src="../../img/imgGaleriaIndex.png" />
                </a>
            </div>
            <div class="carousel-feature">
            	<a href="http://www.globo.com">
                	<img class="carousel-image" alt="Image Caption" src="../../img/imgGaleriaIndex.png" />
                </a>
            </div>
            <div class="carousel-feature">
            	<a href="http://www.globo.com">
                	<img class="carousel-image" alt="Image Caption" src="../../img/imgGaleriaIndex.png" />
                </a>
            </div>
        </div>
    
      	<div id="carousel-left">
        	<span class="left">prev</span>
        </div>
      	<div id="carousel-right">
        	<span class="right">next</span>
        </div>
    </div>
  
</body>
</html>
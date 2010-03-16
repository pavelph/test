<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>jQuery Gradient Fade Demo</title>
 
	<!-- Linked Files. -->
	<script src="jquery/jquery.js" type="text/javascript" charset="utf-8"></script>
	
	<script type="text/javascript">
 
		$(
			function(){
 
				// Get all of the gradient images and loop
				// over them using jQuery implicit iteration.
				$( "img.gradient" ).each(
					function( intIndex ){
						var jImg = $( this );
						var jParent = null;
						var jDiv = null;
						var intStep = 0;
 
						// Get the parent
						jParent = jImg.parent();
 
						// Make sure the parent is position
						// relatively so that the graident steps
						// can be positioned absolutely within it.
						jParent
							.css( "position", "relative" )
							.width( jImg.width() )
							.height( jImg.height() )
						;
 
						// Create the gradient elements. Here, we
						// are hard-coding the number of steps,
						// but this could be abstracted out.
						for (
							intStep = 0 ;
							intStep <= 100 ;
							intStep++
							){
 
							// Create a fade level.
							jDiv = $( "<div></div>" );
 
							// Set the properties on the fade level.
							jDiv
								.css (
									{
										backgroundColor: "#FFFFFF",
										opacity: (intStep * 1 / 100),
										bottom: ((100 - (intStep * 1) ) + "px"),
										left: "0px",
										position: "absolute"
									}
									)
								.width( jImg.width() )
								.height( 1 )
							;
 
							// Add the fade level to the
							// containing parent.
							jParent.append( jDiv );
 
						}
 
					}
					);
 
			}
			);
 
	</script>
</head>
<body>
 
	<h1>
		jQuery Gradient Fade Demo
	</h1>
 
	<p>
		Here is the image before we add the gradient:
	</p>
 
	<p>
      <img src="images/ocean.jpg" width="400" height="544" alt="Ocean">
	</p>
 
	<p>
		Here is the image after we add the gradient:
	</p>
 
	<p>
	  <img src="images/ocean.jpg" width="400" height="544" alt="Ocean" class="gradient">
	</p>
 
</body>
</html>
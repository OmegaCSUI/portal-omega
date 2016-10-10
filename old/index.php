<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Anak Omega</title>
<link href="stylesheet/default.css" rel="stylesheet" type="text/css" />
<script src="script/jquery-3.1.1.min.js"></script>
<script>
	$(document).ready(function(){
		$('a[href^="#"]').on('click',function (e) {
			e.preventDefault();
	
			var target = this.hash;
			var $target = $(target);
	
			$('html, body').stop().animate({
				'scrollTop': $target.offset().top
			}, 700, 'swing', function () {
				window.location.hash = target;
			});
		});
	});
</script>
</head>

<body>
<div id="title">
	  <p>Welcome to the Omega Site Portal</p>
	</div>
    
    <!--<div class="pictmid"><img src="" alt="Lambang Omega" name="logo" width="300" height="300" id="logo" /></div>-->
    
    <div class="button">
    	<p><a href="#portal">Continue to Portals...</a></p>
    </div>
    <div>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    </div>
    <div id="portal">
      <p>Hereby lies the remnants of the past.</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    </div>
</body>
</html>
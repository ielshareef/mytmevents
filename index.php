<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>My Events</title>

  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  	<script>
  	  window.fbAsyncInit = function() {
  	    FB.init({
  	      appId      : '253358948361933',
  	      xfbml      : true,
  	      version    : 'v2.6'
  	    });
  	  };

  	  (function(d, s, id){
  	     var js, fjs = d.getElementsByTagName(s)[0];
  	     if (d.getElementById(id)) {return;}
  	     js = d.createElement(s); js.id = id;
  	     js.src = "//connect.facebook.net/en_US/sdk.js";
  	     fjs.parentNode.insertBefore(js, fjs);
  	   }(document, 'script', 'facebook-jssdk'));
  	</script>
</head>

<body>
	<script>
	// Only works after `FB.init` is called
	function myFacebookLogin() {
	  FB.login(function(){}, {scope: 'publish_actions'});
	}
	</script>
	<button onclick="myFacebookLogin()">Login with Facebook</button>
	
	<div
	  class="fb-like"
	  data-share="true"
	  data-width="450"
	  data-show-faces="true">
	</div>
</body>
</html>
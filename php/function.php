<?php

function head($title){

	if(!$title){
		$title = "<title>Makky's Note</title>";
	}else{
		$title = "<title>".$title." | Makky's Note</title>";
	}

echo '<head>
	<meta charset="utf-8">
	'.$title.'
	<meta name="viewport" content="width=device-width" />
	<link rel="icon" type="image/png" href="image/favicon.ico" />
	<link rel="apple-touch-icon-precomposed" href="image/webclip.png" />
	<meta name="description" content="Makky\'s Note - Makky(小林 正樹)のWebサイトです。">
	<meta name="keywords" content="小林 正樹,Kobayashi,Masaki,Makky,Makky\'snote,Web Developer,StreetView,筑波大学,知識情報・図書館学類,klis 13 AC">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/foundation.min.css">
	<link rel="stylesheet" href="css/app.css" />
	<link rel="stylesheet" href="css/style.css" />
	  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
	 <script src="js/vendor/custom.modernizr.js"></script>
	<link rel="stylesheet" href="css/social_foundicons.css">
	<!--[if lt IE 8]>
	<link rel="stylesheet" href="css/social_foundicons_ie7.css">

	<![endif]-->


</head>';

}


$Menu_list = array(
	"Streetview" => "/streetview",
	"Picture" => "https://plus.google.com/u/0/photos/103944930745515141285/albums",
	"Blog" => "http://blog.makkysnote.org/",
	"App" => "/apps",
	"Portfolio" => "/portfolio",
	"About Me" => "/about",
	"Contact" => "http://blog.makkysnote.org/contact/"
);

function Output_Menu_list($Menu_list){
	$list = "";
	foreach($Menu_list as $key => $val){
		$list = $list.echo_list($key, $val);
	}
	return $list;
}

function echo_list($key, $val){
	$target = "";

	if(preg_match("/http/", $val)){
		$target = 'target="_brank"';
	}
	
	return  '<li><a href="'.$val.'" '.$target.'>'.$key.'</a></li>';
}

$list = Output_Menu_list($Menu_list);


function navigation(){

global $list;

echo '<nav class="top-bar">
	<ul class="title-area">
		<li class="name"><h1><a href="/">Makky\'s Note</a></h1></li>
		<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
	</ul>

	<section class="top-bar-section">
		<ul class="right">
			<li class="divider hide-for-small"></li>
			'.$list.'
			<li class="divider"></li>
		</ul>
	</section>
</nav>';

}




function foot(){

global $list;
	


echo '<footer class="large-12 columns">
	<div class="large-6 columns">
		<div class="large-12 columns">
			<a href="http://www.w3.org/html/logo/">
				<img src="http://www.w3.org/html/logo/badge/html5-badge-h-multimedia-semantics.png" width="165" height="64" alt="HTML5 Powered with Multimedia, and Semantics" title="HTML5 Powered with Multimedia, and Semantics">
			</a>
				<img src="image/webclip.png" alt="logo" width="30" height="30">　
		</div>
		<div class="large-12 columns">
			<p>Copyright &copy; Makky\'s Note All Rights Reserved.</p>
		</div>
	</div>
    <div class="large-6 columns">
		<div class="large-12 columns">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- hh -->
<ins class="adsbygoogle right"
     style="display:inline-block;width:468px;height:15px"
     data-ad-client="ca-pub-5501734840184095"
     data-ad-slot="1430464169"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
		</div>
				<div class="large-12 columns">
			<ul class="right">'.$list.'</ul>
		</div>
    </div>

</footer>

 <script>
  document.write(\'<script src=\' +
  (\'__proto__\' in {} ? \'js/vendor/zepto\' : \'js/vendor/jquery\') +
  \'.js><\/script>\')
  </script>
 <script src="js/foundation/foundation.js"></script>
  <script src="js/foundation/foundation.alerts.js"></script>
  <script src="js/foundation/foundation.clearing.js"></script>
  <script src="js/foundation/foundation.cookie.js"></script>
  <script src="js/foundation/foundation.dropdown.js"></script>
  <script src="js/foundation/foundation.forms.js"></script>
  <script src="js/foundation/foundation.joyride.js"></script>
  <script src="js/foundation/foundation.magellan.js"></script>
  <script src="js/foundation/foundation.orbit.js"></script>
  <script src="js/foundation/foundation.placeholder.js"></script>
  <script src="js/foundation/foundation.reveal.js"></script>
  <script src="js/foundation/foundation.section.js"></script>
  <script src="js/foundation/foundation.tooltips.js"></script>
  <script src="js/foundation/foundation.topbar.js"></script>
  <script src="js/foundation/foundation.interchange.js"></script>
  <script>
    $(document).foundation();
  </script>
   <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push([\'_setAccount\', \'UA-35533639-1\']);
  _gaq.push([\'_setDomainName\', \'makkysnote.org\']);
  _gaq.push([\'_trackPageview\']);

  (function() {
    var ga = document.createElement(\'script\'); ga.type = \'text/javascript\'; ga.async = true;
    ga.src = (\'https:\' == document.location.protocol ? \'https://ssl\' : \'http://www\') + \'.google-analytics.com/ga.js\';
    var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
';


}

/*

*/




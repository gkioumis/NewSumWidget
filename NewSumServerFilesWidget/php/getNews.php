<?php
require_once 'common.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>
NewSum on the Web
</title>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-31632742-1']);
  _gaq.push(['_setDomainName', 'scify.gr']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<meta http-equiv="content-type" content="text/html; charset=utf-8">
<script type="text/javascript"
        src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js">
</script>

<!--
Style defs:
-->
<!--<link rel="stylesheet" href="blueprint/screen.css" type="text/css" media="screen, projection"/>
<link rel="stylesheet" href="blueprint/print.css" type="text/css" media="print"/> 
<link rel="stylesheet" href="blueprint/plugins/blueprint-plugin---pagination-master/screen.css" type="text/css" media="screen"/>-->


<!-- Liquid Blueprint CSS -->
	<link rel="stylesheet" href="../blueprint/src/reset.css" type="text/css" media="screen, projection">
	<link rel="stylesheet" href="../blueprint/src/liquid.css" type="text/css" media="screen, projection">
	<link rel="stylesheet" href="../blueprint/src/typography.css" type="text/css" media="screen, projection">
	<link rel="stylesheet" href="../blueprint/plugins/fancy-type/fancy-type.css" type="text/css" media="screen, projection">
	<!--[if IE]><link rel="stylesheet" href="../blueprint/lib/ie.css" type="text/css" media="screen, projection"><![endif]-->


<!--[if lt IE 8]>
  <link rel="stylesheet" href="css/blueprint/ie.css" type="text/css" media="screen, projection"/>
<![endif]-->
<style media="screen" type="text/css">
body, body a, h1, h2, h3{
  color: white;
}

.category {
  float: left;
  padding: 5px;
}

#indexDiv, #indexDiv a {
 color: white;
 background-color: #7193C0;
}

#categoryDiv, #categoryDiv a {
 color: white;
 background-color: #7193C0;
}

#summaryDiv {
 color: white;
 background: url("img/space.jpg") repeat scroll 0px 0px;
}

#summaryDiv a {
  color: rgb(0,255,255);
}

.button a:hover {
  background: rgba(255,255,0,100);
}

.button a {
  background: rgba(255,255,0,0);

}

.container {
 background-color: #81A3D0;
}
</style>
</head>
<body>

<?
?>
<div class="container">
<div class="span-22 center"><h1><img src="img/NewSum.png" alt="NewSum"/> on the Web</h1></div>
<div class="span-2 last">
  <a href="?lang=gr"><img src="img/grFlag.svg" alt="Greek Flag" width=30 height=20/></a>
  <a href="?lang=en"><img src="img/ukFlag.svg" alt="UK Flag" width=30  height=20/></a>
</div>

<div id="indexDiv" class="span-24 last"><div class="info">Loading...</div></div>
<div id="categoryDiv" class="span-5 border"><div class="info">No category selected.</div></div>
<div id="summaryDiv" class="span-18 last"><div class="info">No summary loaded...
Click on a category to start.</div>
</div>
<div id="log" class="span-24 hide"><h2>Log</h2></div>
</div>

<script type="text/javascript">
<!--
function getURLParameter(name) {
    return decodeURI(
        (RegExp(name + '=' + '(.+?)(&|$)').exec(location.search)||[,null])[1]
    );
}

function getLang() {
//  alert(getURLParameter("lang"));

 if (getURLParameter("lang") == "null")
  return "gr";
 else
  return getURLParameter("lang");
}

function getCategories() {
  $("#indexDiv").load("getCategories.php?lang=" + getLang());
}

function getCategory(sCat) {
//  alert(sCat);
  $("#categoryDiv").html("<div class='info'>Loading...</div>");
  $("#categoryDiv").load( "getCategory.php?category=" + encodeURIComponent(sCat) + "&lang=" + getLang());
}
function getSummary(sTopic, sTitle) {  
//   alert(encodeURIComponent(sTitle));
  $("#summaryDiv").html("<div class='info'>Loading...</div>");
  $("#summaryDiv").load( "getSummary.php?topicID=" + sTopic + "&lang=" + getLang()
    + "&title=" + encodeURIComponent(sTitle));
}



$(document).ready(function() {
    getCategories();
});

//-->
</script>

</body>
</html>
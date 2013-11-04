<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SCSU Parking Tracker</title>
<link href="css/boilerplate.css" rel="stylesheet" type="text/css">
<link href="css/master.css" rel="stylesheet" type="text/css">
<link href="css/menu.css" rel="stylesheet" type="text/css">
<!-- 
To learn more about the conditional comments around the html tags at the top of the file:
paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/

Do the following if you're using your customized build of modernizr (http://www.modernizr.com/):
* insert the link to your js here
* remove the link below to the html5shiv
* add the "no-js" class to the html tags at the top
* you can also remove the link to respond.min.js if you included the MQ Polyfill in your modernizr build 
-->
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="css/respond.min.js"></script>
</head>
<body>
<div class="gridContainer clearfix">
  <div id="banner"><img src="images/scsu.png" width="107" height="91"/>SCSU Parking Tracker</div>
  <div id="navigation">
     <ul id="menu-bar">
     <li><a href="index.php">Home</a>
     </li>
     <li><a href="tracker.php">Tracker</a>
     </li>
     <li><a href="http://www.southernct.edu">SC Home</a>
     </li>
    </ul>
  </div>
  <div id="body">
  	<div id="table" align="center">
	<table>
    	<tr>
        	<th>
            Lots
            </th>
            <th>
            Status
            </th>
        </tr>
    	<tr>
            <td>
            Lot 1
            </td>
            <td>
            100%
            </td>
        </tr>
        <tr>
            <td>
            Lot 2
            </td>
            <td>
            25%
            </td>
        </tr>
        <tr>
            <td>
            Lot 3
            </td>
            <td>
            50%
            </td>
        </tr>
    </table>
    </div>
  </div>
</div>
</body>
</html>

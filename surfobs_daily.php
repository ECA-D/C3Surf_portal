<?php
error_reporting(E_ALL  & ~E_NOTICE);
session_start();
?>
<!DOCTYPE html>
<html style="" class="js js canvas no-touch rgba opacity cssanimations csstransforms csstransforms3d csstransitions svg inlinesvg WebfontLoader-processed bootstrap-anchors-processed wf-opensans-n4-active wf-opensans-n7-active wf-active" dir="ltr" prefix="content: https://purl.org/rss/1.0/modules/content/ dc: https://purl.org/dc/terms/ foaf: https://xmlns.com/foaf/0.1/ og: https://ogp.me/ns# rdfs: https://www.w3.org/2000/01/rdf-schema# sioc: https://rdfs.org/sioc/ns# sioct: https://rdfs.org/sioc/types# skos: https://www.w3.org/2004/02/skos/core# xsd: https://www.w3.org/2001/XMLSchema#" lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="shortcut icon" href="theme/favicon_0.png" type="image/png">
    <link rel="profile" href="https://www.w3.org/1999/xhtml/vocab">
    <meta name="generator" content="Drupal 7 (https://drupal.org)">
    <link rel="canonical" href="https://climate.copernicus.eu/events">
    <link rel="shortlink" href="https://climate.copernicus.eu/events">
<!--    <title>Climate monitoring products for Europe based on Surface in-situ Observations | Copernicus Climate Change Service</title>   -->
 <title>Monitoring European climate using surface observations | Copernicus Climate Change Service</title>
    
    <script src="https://www.w3schools.com/lib/w3.js"></script>
    
  <!-- General settings to embed adaguc viewer -->
  <link rel="stylesheet" type="text/css" href="./adaguc-viewer/builds/adagucwebmapjs/webmapjs.min.css" />
  <script type="text/javascript" src="./adaguc-viewer/builds/adagucwebmapjs/webmapjs.min.js"></script>
  
  <script type="text/javascript" src="include/adaguc/gfiapp_d3c3.js"></script>
  <!-- Specific for this page -->
  <script type="text/javascript" src="include/adaguc/eobsmaps_dailyupdates.js"></script>
  <?php
   $EOBSversion="test";
  ?>

  <?php include('include/styles.php'); ?>

 	
</head>

  <body class="html not-front not-logged-in no-sidebars page-events ff ff43 win desktop">
   <?php include('include/header.php'); ?>  
 <!-- <style type="text/css"> -->
 <!--   .webmap1 { -->
 <!--   margin: auto; -->
 <!--   width: 50%;  -->
 <!--   border: 3px solid green; -->
 <!--   padding: 10px; -->
 <!--  } -->
 <!-- </style> -->

    <!-- Title -->
    <div id="globalpageheaderwrapper" class="wrapper clearfix ">
      <div id="globalpageheadercontainer" class="container">
	<div id="globalpageheader">
          <div class="row">
	    <div class="region region-static-page-title col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
	      <div class="row-fluid">
		<div id="block-delta-blocks-page-title" class="block block-delta-blocks col-xs-12 col-sm-12 col-md-12 col-lg-12 clearfix">
<!--		  <h1 id="page-title" class="title">Climate monitoring products for Europe based on Surface <i>in-situ</i> Observations</h1>-->
		  <h1 id="page-title" class="title">Monitoring European climate using surface observations</h1>
		</div> <!-- /.block -->
	      </div>
	    </div>
          </div>
        </div>
      </div>
    </div>
    
    <div id="mainwrapper" class="wrapper clearfix ">
      <div id="maincontainer" class="container">
        <div id="main">
          <div class="row-fluid">
            <div class="region region-content  col-xs-12 col-sm-12 col-md-8 col-lg-8">
	      <div class="row-fluid">
		
		<!-- Breadcrum -->
		<h2 class="element-invisible">You are here</h2><div class="breadcrumb"><span class="inline odd first"><a href="https://climate.copernicus.eu/">Home</a></span></div>

		<!-- Main part -->
		<div id="block-system-main" class="block block-system col-xs-12 col-sm-12 col-md-12 col-lg-12 clearfix">

<h3>Map of <span id="yesterday"></span></h3>
		  
 Select index
   <div id="layerlist"></div>
  <br>

  Selected date: <b><span id="currenttime"></span></b>

 
  <table><tr> 
     <td style="width:100%" > 
         <div id="timeslider" style="width:100%" class="timeslider"></div> 
     </td> 
     <td> 
         <button style="font-size:11px" id="timesliderprev" class="timesliderButtonPrev">&lt;</button> 
     </td> 
     <td> 
         <button style="font-size:11px" id="timeslidernext" class="timesliderButtonNext">&gt;</button> 
     </td> 
     </tr></table> 


   <br> 
  
  <!-- <div id="colorrangechooser"><p class="normaltext">Define range min: -->
  <!-- <input style="width:40px;" type="text" name="min"/>max: -->
  <!-- <input style="width:40px;" type="text" name="max"/> -->
  <!-- <button name="submit">Submit</button> -->
  <!-- <button name="reset">Reset</button> -->
  <!-- <button name="downloadmap">Download map</button></p> -->
  <!-- </div> -->
  <div id="webmapjswrapper" style="width:400px;">
    <div id="webmap1" style="width:400px;height:301px;"></div>
  </div>

	 <!-- <img alt="" src="images/rr_20010312_eobsv15.0.png" style="width: 100%;" /> -->
		  <h3 style="text-align: justify;"></h3>
<!--	This Copernicus service will provide climate monitoring products for Europe. These will be derived and based on existing (and external) datasets as well as datasets that will be developed within the service. Access will be provided to the original datasets and the derived products such as indices. Data access, maps and graphs will be provided for all datasets and products in the future.
<br>
Additionally, all datasets and derived products will be used in monthly and annual state-of-the-climate reports for Europe. These will be available in the future.
-->
This service provides climate monitoring products for Europe, based on surface in-situ observations. Data are collected by ground-based observation networks, owned and operated by the National Meteorological Services and others. Many thousands of historical observations are processed to prepare datasets, maps and graphs of basic variables like temperature and precipitation, as well as a large number of derived impact-oriented climate indicators. In monthly and annual State-of-the-European-climate reports, recent developments are presented and put in historical perspective.
<br><br>
			  <table width="100%" cellspacing="10" cellpadding="10">
		    <tbody>
		      <tr>
			<td class="product-startpage" style="width: 17%; background-color: #FF9C32;">
			  <h2 style="text-align: center;"><a style="color: #ffffff;" href="<?php echo $webhost;?>/dataaccess/index.php">Data access</a></h2>
			</td>
			<td style="width: 2%; "> </td>
			<td class="product-startpage" style="width: 17%; background-color: #006699;">
			  <h2 style="text-align: center;"><a style="color: #ffffff;" href="maps/index.php">Maps</a></h2>
			</td>
			<td style="width: 2%; "> </td>
			<td class="product-startpage" style="width: 17%; background-color: #04B404;">
			  <h2 style="text-align: center;"><a style="color: #ffffff;" href="stateoftheclimate/index.php">State of the European climate</a></h2>
			</td>
		      </tr>
		    </tbody>
		  </table>

</div>	  
 	       </div> <!-- /.block -->
              </div>
	     </div>
	      
	
  <?php include('include/menu_portal.php'); ?>

      </div>
    </div>
  <?php include('include/footer.php'); ?>
    <?php include('include/mobile_menu.php'); ?>
    </body>
</html>

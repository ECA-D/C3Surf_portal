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
    <link rel="shortcut icon" href="../theme/favicon_0.png" type="image/png">
    <link rel="profile" href="https://www.w3.org/1999/xhtml/vocab">
    <meta name="generator" content="Drupal 7 (https://drupal.org)">
    <link rel="canonical" href="https://climate.copernicus.eu/events">
    <link rel="shortlink" href="https://climate.copernicus.eu/events">
    <title>E-OBS daily maps</title>
    
    <script src="https://www.w3schools.com/lib/w3.js"></script>
 

  <?php include('../include/styles.php'); ?>
  
    <script type='text/javascript'>
      var config = {
      apiBaseUrl: 'https://www.ecad.eu/data-backend',
      eobsWMSServiceUrl:
        'https://adaguc-server-ecad-adaguc.pmc.knmi.cloud/adaguc-server?DATASET=eobs&SERVICE=WMS',
      app: 'ecadeobsviewer',
    };
    </script>


  </head>


  <body class="html not-front not-logged-in no-sidebars page-events ff ff43 win desktop">
   <?php include('../include/header.php'); ?>  

    <!-- Title -->
    <div id="globalpageheaderwrapper" class="wrapper clearfix ">
      <div id="globalpageheadercontainer" class="container">
	<div id="globalpageheader">
          <div class="row">
	    <div class="region region-static-page-title col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
	      <div class="row-fluid">
		<div id="block-delta-blocks-page-title" class="block block-delta-blocks col-xs-12 col-sm-12 col-md-12 col-lg-12 clearfix">
		  <h1 id="page-title" class="title">E-OBS daily maps</h1>
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
          <!-- <div class="row-fluid"> -->
          <!--   <div class="region region-content  col-xs-12 col-sm-12 col-md-8 col-lg-8"> -->
	  <!--     <div class="row-fluid"> -->
		
		<!-- Breadcrum -->
		<h2 class="element-invisible">You are here</h2><div class="breadcrumb"><span class="inline odd first"><a href="../surfobs.php">Home</a></span><span class="delimiter">&raquo;</span> <span class="inline even last"><a href="eobsdailymaps.php">E-OBS daily maps</a></span></div>

		<!-- Main part -->

		  Shown are the daily maps for E-OBS v28.0e.<br><br>  
		  
		  <div style="overflow:auto;height:110vh;background:white;">
		    <div style="height:800px;width:75vw; margin: 0px;padding:0;">
		      <div id="app" style="height:100%;width:1000px;  margin: 0 auto;"></div>
		    </div>
		    <script src="https://knmi-ecad-webmapjs-prd.s3-eu-west-1.amazonaws.com/ecad-webmapjs-app-0.2.7.js"></script>
		  </div>
		</div>
	      
     <!-- 	  </div> -->
     <!-- 	</div> -->
     <!-- 	<\!-- menu_portal.php -\-> -->
     <!--  <?php include('../include/menu_portal.php'); ?> -->
     <!-- </div>	 -->
    </div>
    <?php include('../include/footer.php'); ?>
    <?php include('../include/mobile_menu.php'); ?>
    
  </body>
</html>

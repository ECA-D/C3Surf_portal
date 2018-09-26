<?php
error_reporting(E_ALL  & ~E_NOTICE);
session_start();
?>
<!DOCTYPE html>
<html style="" class="js js canvas no-touch rgba opacity cssanimations csstransforms csstransforms3d csstransitions svg inlinesvg WebfontLoader-processed bootstrap-anchors-processed wf-opensans-n4-active wf-opensans-n7-active wf-active" dir="ltr" prefix="content: http://purl.org/rss/1.0/modules/content/ dc: http://purl.org/dc/terms/ foaf: http://xmlns.com/foaf/0.1/ og: http://ogp.me/ns# rdfs: http://www.w3.org/2000/01/rdf-schema# sioc: http://rdfs.org/sioc/ns# sioct: http://rdfs.org/sioc/types# skos: http://www.w3.org/2004/02/skos/core# xsd: http://www.w3.org/2001/XMLSchema#" lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="shortcut icon" href="../theme/favicon_0.png" type="image/png">
    <link rel="profile" href="http://www.w3.org/1999/xhtml/vocab">
    <meta name="generator" content="Drupal 7 (http://drupal.org)">
    <link rel="canonical" href="http://climate.copernicus.eu/events">
    <link rel="shortlink" href="http://climate.copernicus.eu/events">
    <title>Data</title>
    
    <script src="https://www.w3schools.com/lib/w3.js"></script>
  <script type="text/javascript" async
  src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.5/latest.js?config=TeX-MML-AM_CHTML" async>
</script>

<?php include('../include/collapsible.php'); ?>
  <?php include('../include/styles.php'); ?>
  
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
                  <h1 id="page-title" class="title">Data</h1>
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
                <h2 class="element-invisible">You are here</h2><div class="breadcrumb"><span class="inline odd first"><a href="../surfobs.php">Home</a></span><span class="delimiter">&raquo;</span> <span class="inline even last"><a href="index.php">Data</a></span></div>

                <!-- Main part -->
                <div id="block-system-main" class="block block-system col-xs-12 col-sm-12 col-md-12 col-lg-12 clearfix">

                 Definitions and mathematical formulas of the indices used are provided below. A core set of 28 indices follows the definitions recommended by the CCl/CLIVAR/JCOMM Expert Team on Climate Change Detection and Indices (<a href="http://www.clivar.org/organization/etccdi/etccdi.php" target="_blank">ETCCDI</a>). A few indices are available as well. Note that new research may lead to additional indices or changes in the indices definitions in the future.<br><br>

                   The indices have been grouped in different categories corresponding with different aspects of climate change. 
                  <br><br>

		  Click on a category to see the definitions of the indices in that section.<br><br>


		  <button class="accordion">Cold indices</button>
		  <div class="panel">
		<?php include('cold_indices.php');?>
		 </div>

		<button class="accordion">Heat indices</button>
		<div class="panel">
		<?php include('heat_indices.php');?>
		</div>

		<button class="accordion">Multi-element indices</button>
		<div class="panel">
		<?php include('compound_indices.php');?>
		</div>

		<button class="accordion">Drought indices</button>
		<div class="panel">
		<?php include('drought_indices.php');?>
		</div>

		<button class="accordion">Rain indices</button>
		<div class="panel">
		<?php include('rain_indices.php');?>
		</div                
 
                </div>  
              </div>
            </div> <!-- /.block -->
          </div>
        </div>
        <!-- menu_portal.php -->
        <?php include('../include/menu_portal.php'); ?>
      </div>    
    </div>
    <?php include('../include/footer.php'); ?>
    <?php include('../include/mobile_menu.php'); ?>
    <script src="../include/collapsible_bottompage.js"></script>
  </body>
</html>

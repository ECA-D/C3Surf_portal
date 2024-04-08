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
    <title>E-OBS indices access</title>
    
    <script src="https://www.w3schools.com/lib/w3.js"></script>
 

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
		  <h1 id="page-title" class="title">E-OBS indices access</h1>
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
		<h2 class="element-invisible">You are here</h2><div class="breadcrumb"><span class="inline odd first"><a href="../surfobs.php">Home</a></span><span class="delimiter">&raquo;</span> <span class="inline even last"><a href="access_eobs_indices.php">E-OBS indices access</a></span></div>

		<!-- Main part -->
		<div id="block-system-main" class="block block-system col-xs-12 col-sm-12 col-md-12 col-lg-12 clearfix">


		  This is the download page for the climate indices
		  derived from the E-OBS dataset.  The datafiles below
		  provide climate indices
		  for <a href="access_eobs.php">E-OBS</a> derived
		  using daily minimum temperature (TN), daily maximum
		  temperature (TX), daily precipitation sum (RR),
		  global radiation (QQ), relative humidity (HU) and
		  daily mean wind speed (FG).  The datafiles are in
		  compressed NetCDF-4 format, separated in three sets
		  per index: annual, monthly and seasonal. Seasonal
		  indices are calculated from the monthly indices,
		  where for December-January-February (DJF) the
		  December of the previous year is used:
		  Dec(1951)-Jan(1952)-Feb(1952). The set of indices
		  that the (now disbanded) WMO Commission for
		  Climatology's ETCCDI developed have been taken-up by
		  the Expert Team on Sector-Specific Indices
		  (<a href="https://public.wmo.int/en/events/meetings/expert-team-sector-specific-climate-indices-et-sci">ET-SCI</a>)
		  and are marked with *.
<br><br>Next to the indices based on only temperature or
		  precipitation, a couple of multi-element indices are
		  available. Of these, scPDSI has monthly values,
		  while UTCI, PET-MK and PET-PM have daily
		  values. scPDSI uses PET-MK as one of the input
		  elements. UTCI and PET-PM based on E-OBSv23.1e make
		  use of ERA5 wind speed fields as input, next to the
		  E-OBS elements, but UTCI and PET-PM based on newer
		  E-OBS versions use E-OBS wind speed as input and
		  therefore start only in 1980. More details about the
		  abbreviations and calculations can be found in
		  the <a href="../userguidance/indicesdictionary.php">indices
		  dictionary</a>.
  
		  <h3>Terms of use</h3>

		  The <a href="https://www.ecad.eu/documents/ECAD_datapolicy.pdf">ECA&amp;D data policy</a> applies. These observational data are strictly for use in non-commercial research and non-commercial education projects only. If you are unsure about the terms "commercial", "research", and "education", or you have any questions about the climate indices please contact the ECA&amp;D staff at <a href="mailto:&#101;&#099;&#097;&#064;&#107;&#110;&#109;&#105;&#046;&#110;&#108;">&#101;&#099;&#097;&#064;&#107;&#110;&#109;&#105;&#046;&#110;&#108;</a> for clarification.

		  <h3>Indices files</h3> Click on an item to view the
		  download links for those indices. 
		  <br><br> The best-estimate for the various indices
		  is given as the median of the dataset
		  based on the 20 members of the E-OBS ensemble. 
		  <br><br>The spread in the ensemble, which is a
		  measure of the statistical uncertainty associated
		  with the gridding, is captured in the values for the
		  2.5 and 97.5 percentiles, also based on the 20
		  members of the E-OBS ensemble. These percentile
		  values are included as two variables per netcdf
		  file. The <a href="../userguidance/uncertainty_indices.php">user
		  guidance</a> gives more information on the choice of
		  the 20 ensemble members for the indices
		  calculations.

		  <br><br>
		  
		  <button class="accordion">Based on E-OBSv29.0e (up to 31 Dec 2023)</button>
		  <div class="panel">
		    <?php include('eobsindicesv29.0.php'); ?>
		  </div>
		  
		  <button class="accordion">Based on E-OBSv27.0e (up to 31 Dec 2022)</button>
		  <div class="panel">
		    <?php include('eobsindicesv27.0.php'); ?>
		  </div>

		  <button class="accordion">Based on E-OBSv25.0e (up to 31 Dec 2021)</button>
		  <div class="panel">
		    <?php include('eobsindicesv25.0.php'); ?>
		  </div>

		  <button class="accordion">Based on E-OBSv23.1e (up to 31 Dec 2020)</button>
		  <div class="panel">
		    <?php include('eobsindicesv23.1.php'); ?>
		  </div>

		  <h3>Monthly indices updates</h3>
		  Preliminary monthly updates of the indices based on E-OBS are available as well. These are <a href="access_eobs_indices_months.php">available</a> with a monthly resolution, except for PET-MK, PET-PM and UTCI which have a daily resolution.

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

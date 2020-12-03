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
    <title>Comparison E-OBS v21.0 and v20.0</title>
    
    <script src="https://www.w3schools.com/lib/w3.js"></script>
 

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
		  <h1 id="page-title" class="title">Comparison page E-OBS v22.0 and v21.0</h1>
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
		<h2 class="element-invisible">You are here</h2><div class="breadcrumb"><span class="inline odd first"><a href="../surfobs.php">Home</a></span></div>

		<!-- Main part -->
		<div id="block-system-main" class="block block-system col-xs-12 col-sm-12 col-md-12 col-lg-12 clearfix">

This page shows changes between E-OBS v22.0e (released December 2020) and E-OBS v21.0e (released May 2020). E-OBS v21.0e spans 1950-01-01 to 2020-06-30 and E-OBS v21.0e spans 1950-01-01 to 2019-12-31.
<br><br>
E-OBS v22.0e receives funding through the Copernicus Climate Change Service (C3S) and is available through <href="https://surfobs.climate.copernicus.eu/dataaccess/access_eobs.php"> the portal of the "Monitoring European climate using surface observations" service</a> and through the Copernicus Climate Data Store.
<br><br>
<h2>Changes in input data</h2>
<br><br>
<ul>
  <li> New series and updates have been included for Russia, France and Calabria (Italy).</li>
  <li>Removal of series in Scandinavian countries that were not provided by their own national meteorogical services.</li>
  <li>Precipitation in Norway has been shifted by one day due to an error in the processing of these data in E-OBSv21.0e.</li>
  <li>Continued monthly, half-yearly and yearly updates for Germany, Czech Republic, Bosnia and Herzegovina, Norway, Slovenia, Finland, Ireland, Sweden, Luxembourg, Netherlands, Portugal, Spain, Switzerland, France, Denmark, UK and the regional meteorological service of Catalonia (Spain).</li>
  <li>Synoptical messages from the GTS network are used for a maximum of 10 years if no other data is available. In certain areas, the data series end more than 10 years ago. This means that synop is no longer used at all, so the series end 10 or more years ago. This can result in having data for a certain area for a previous version of E-OBS in a certain year, but no longer in a newer version of E-OBS, resulting in empty spots in the E-OBS datasets for recent years. We are trying to update the series for those areas, but this takes time. See chapter 4 of [http://www.ecad.eu/documents/atbd.pdf the Algorithm Theoretical Basis Document (ATBD)] for more details.</li>
</ul>
<br><br>
<h2>Precipitation (RR)</h2>
<h3>Comparing winter and summer 2000</h3>
<table>
 <tr>
  <td><a href="../images/comparepage/v22.0e_v21.0e/Compare_rr_0_25deg_seasonalsums_dec1999-nov2000_v21_0e_nc_baselayers_world_polygons_rr_baselayers_overlay_2000-01-31T00-00-00Z_large.png"><img alt="" src="../images/comparepage/v22.0e_v21.0e/Compare_rr_0_25deg_seasonalsums_dec1999-nov2000_v21_0e_nc_baselayers_world_polygons_rr_baselayers_overlay_2000-01-31T00-00-00Z.png"></a></td>
  <td><a href="../images/comparepage/v22.0e_v21.0e/Compare_rr_0_25deg_seasonalsums_dec1999-nov2000_v21_0e_nc_baselayers_world_polygons_rr_baselayers_overlay_2000-07-31T00-00-00Z_large.png"><img alt="" src="../images/comparepage/v22.0e_v21.0e/Compare_rr_0_25deg_seasonalsums_dec1999-nov2000_v22_0e_nc_baselayers_world_polygons_rr_baselayers_overlay_2000-07-31T00-00-00Z.png"></a></td>
 </tr>
 <tr>
   <td><a href="../images/comparepage/v22.0e_v21.0e/Compare_rr_0_25deg_seasonalsums_dec1999-nov2000_v21_0e_nc_baselayers_world_polygons_rr_baselayers_overlay_2000-01-31T00-00-00Z_large.png"><img alt="" src="../images/comparepage/v22.0e_v21.0e/Compare_rr_0_25deg_seasonalsums_dec1999-nov2000_v21_0e_nc_baselayers_world_polygons_rr_baselayers_overlay_2000-01-31T00-00-00Z.png"></a></td>
   <td><a href="../images/comparepage/v22.0e_v21.0e/Compare_rr_0_25deg_seasonalsums_dec1999-nov2000_v21_0e_nc_baselayers_world_polygons_rr_baselayers_overlay_2000-07-31T00-00-00Z_large.png"><img alt="" src="../images/comparepage/v22.0e_v21.0e/Compare_rr_0_25deg_seasonalsums_dec1999-nov2000_v21_0e_nc_baselayers_world_polygons_rr_baselayers_overlay_2000-07-31T00-00-00Z.png"></a></td>
 </tr>
</table>
<hr>
<table>
  <tr>
    <td><a href="../images/comparepage/v22.0e_v21.0e/Compare_rr_0_25deg_seasonalsums_diff_v22_0e-v21_0e_dec1999-nov2000_nc_baselayers_world_polygons_rr_baselayers_overlay_2000-01-31T00-00-00Z_large.png"><img alt="" src="../images/comparepage/v22.0e_v21.0e/Compare_rr_0_25deg_seasonalsums_diff_v22_0e-v21_0e_dec1999-nov2000_nc_baselayers_world_polygons_rr_baselayers_overlay_2000-01-31T00-00-00Z.png"></a></td>
    <td><a href="../images/comparepage/v22.0e_v21.0e/Compare_rr_0_25deg_seasonalsums_diff_v22_0e-v21_0e_dec1999-nov2000_nc_baselayers_world_polygons_rr_baselayers_overlay_2000-07-31T00-00-00Z_large.png"><img alt="" src="../images/comparepage/v22.0e_v21.0e/Compare_rr_0_25deg_seasonalsums_diff_v22_0e-v21_0e_dec1999-nov2000_nc_baselayers_world_polygons_rr_baselayers_overlay_2000-07-31T00-00-00Z.png"></a></td>
  </tr>
</table>
<br><br>
The figures show the winter (DJF, left) and summer (JJA, right) differences in precipitation amount (mm/3 months) for the year 2000 between E-OBS v22.0e and v21.0e.
<br><br>
<h3>Difference in 1981-2010 climatology</h3>
<table>
  <tr>
    <td><a href="../images/comparepage/v22.0e_v21.0e/Compare_rr_0_25deg_yearsums_1981-2010_v22_0e_nc_baselayers_world_polygons_rr_baselayers_overlay_2010-07-15T00-00-00Z_large.png" target="_blank"><img alt="" src="../images/comparepage/v22.0e_v21.0e/Compare_rr_0_25deg_yearsums_1981-2010_v22_0e_nc_baselayers_world_polygons_rr_baselayers_overlay_2010-07-15T00-00-00Z.png" ></a></td>
</tr>
<tr>
    <td><a href="../images/comparepage/v22.0e_v21.0e/Compare_rr_0_25deg_yearsums_1981-2010_v21_0e_nc_baselayers_world_polygons_rr_baselayers_overlay_2010-07-15T12-00-00Z_large.png" target="_blank"><img alt="" src="../images/comparepage/v22.0e_v21.0e/Compare_rr_0_25deg_yearsums_1981-2010_v21_0e_nc_baselayers_world_polygons_rr_baselayers_overlay_2010-07-15T12-00-00Z.png" ></a></td>
  </tr>
</table>
<hr>
<table>
  <tr>
    <td><a href="../images/comparepage/v22.0e_v21.0e/Compare_rr_0_25deg_diff_yearsums_19812010_v22_0e-v21_0e_nc_baselayers_world_polygons_rr_baselayers_overlay_2010-07-15T00-00-00Z_large.png" target="_blank"><img alt="" src="../images/comparepage/v22.0e_v21.0e/Compare_rr_0_25deg_diff_yearsums_19812010_v22_0e-v21_0e_nc_baselayers_world_polygons_rr_baselayers_overlay_2010-07-15T00-00-00Z.png" ></a></td>
  </tr>
</table>
<br><br>
This figure shows the difference in annual 1981-2010 climatology for precipitation amount (mm/year) between E-OBS v22.0e and v21.0e.
<br><br>
<h3>Standard deviation in daily differences</h3>
<br><br>
<a href="../images/comparepage/v22.0e_v21.0e/Compare_rr_0_25deg_std_daily_v22_0e-v21_0e_nc_baselayers_world_polygons_rr_baselayers_overlay_1984-12-31T00-00-00Z_large.png" target="_blank"><img alt="" src="../images/comparepage/v22.0e_v21.0e/Compare_rr_0_25deg_std_daily_v22_0e-v21_0e_nc_baselayers_world_polygons_rr_baselayers_overlay_1984-12-31T00-00-00Z.png" ></a>
<br><br>
This figure shows the standard deviation in daily differences for precipitation amount (mm/day) between E-OBS v22.0e and v21.0e.
<br><br>
<h2>Mean temperature (TG)</h2>
<h3>Comparing winter and summer 2000</h3>
<table>
  <tr>
    <td><a href="../images/comparepage/v22.0e_v21.0e/Compare_tg_0_25deg_seasonalmeans_dec1999-nov2000_v22_0e_nc_baselayers_world_polygons_tg_baselayers_overlay_2000-01-31T00-00-00Z_large.png"><img alt="" src="../images/comparepage/v22.0e_v21.0e/Compare_tg_0_25deg_seasonalmeans_dec1999-nov2000_v22_0e_nc_baselayers_world_polygons_tg_baselayers_overlay_2000-01-31T00-00-00Z.png"></a></td>
    <td><a href="../images/comparepage/v22.0e_v21.0e/Compare_tg_0_25deg_seasonalmeans_dec1999-nov2000_v22_0e_nc_baselayers_world_polygons_tg_baselayers_overlay_2000-07-31T00-00-00Z_large.png"><img alt="" src="../images/comparepage/v22.0e_v21.0e/Compare_tg_0_25deg_seasonalmeans_dec1999-nov2000_v22_0e_nc_baselayers_world_polygons_tg_baselayers_overlay_2000-07-31T00-00-00Z.png"></a></td>
    </tr>
  <tr>
    <td><a href="../images/comparepage/v22.0e_v21.0e/Compare_tg_0_25deg_seasonalmeans_dec1999-nov2000_v21_0e_nc_baselayers_world_polygons_tg_baselayers_overlay_2000-01-31T00-00-00Z_large.png"><img alt="" src="../images/comparepage/v22.0e_v21.0e/Compare_tg_0_25deg_seasonalmeans_dec1999-nov2000_v21_0e_nc_baselayers_world_polygons_tg_baselayers_overlay_2000-01-31T00-00-00Z.png"></a></td>
    <td><a href="../images/comparepage/v22.0e_v21.0e/Compare_tg_0_25deg_seasonalmeans_dec1999-nov2000_v21_0e_nc_baselayers_world_polygons_tg_baselayers_overlay_2000-07-31T00-00-00Z_large.png"><img alt="" src="../images/comparepage/v22.0e_v21.0e/Compare_tg_0_25deg_seasonalmeans_dec1999-nov2000_v21_0e_nc_baselayers_world_polygons_tg_baselayers_overlay_2000-07-31T00-00-00Z.png"></a></td>
  </tr>
</table>
<hr>
<table>
  <tr>
    <td><a href="../images/comparepage/v22.0e_v21.0e/Compare_tg_0_25deg_seasonalmeans_diff_v22_0e-v21_0e_dec1999-nov2000_nc_baselayers_world_polygons_tg_baselayers_overlay_2000-01-31T00-00-00Z_large.png"><img alt="" src="../images/comparepage/v22.0e_v21.0e/Compare_tg_0_25deg_seasonalmeans_diff_v22_0e-v21_0e_dec1999-nov2000_nc_baselayers_world_polygons_tg_baselayers_overlay_2000-01-31T00-00-00Z.png"></a></td>
    <td><a href="../images/comparepage/v22.0e_v21.0e/Compare_tg_0_25deg_seasonalmeans_diff_v22_0e-v21_0e_dec1999-nov2000_nc_baselayers_world_polygons_tg_baselayers_overlay_2000-07-31T00-00-00Z_large.png"><img alt="" src="../images/comparepage/v22.0e_v21.0e/Compare_tg_0_25deg_seasonalmeans_diff_v22_0e-v21_0e_dec1999-nov2000_nc_baselayers_world_polygons_tg_baselayers_overlay_2000-07-31T00-00-00Z.png"></a></td>
  </tr>
</table>
<br><br>
The figures show the winter (DJF, left) and summer (JJA, right) differences in mean temperature (&#176;C) for the year 2000 between E-OBS v22.0e and v21.0e.
<br><br>
<h3>Difference in 1981-2010 climatology</h3>
<table>
<tr>
<td><a href="../images/comparepage/v22.0e_v21.0e/Compare_tg_0_25deg_yearmeans_1981-2010_v22_0e_nc_baselayers_world_polygons_tg_baselayers_overlay_2010-07-15T00-00-00Z_large.png"><img alt="" src="../images/comparepage/v22.0e_v21.0e/Compare_tg_0_25deg_yearmeans_1981-2010_v22_0e_nc_baselayers_world_polygons_tg_baselayers_overlay_2010-07-15T00-00-00Z.png" ></a></td>
</tr>
<tr>
  <td><a href="../images/comparepage/v22.0e_v21.0e/Compare_tg_0_25deg_yearmeans_1981-2010_v21_0e_nc_baselayers_world_polygons_tg_baselayers_overlay_2010-07-15T00-00-00Z_large.png"><img alt="" src="../images/comparepage/v22.0e_v21.0e/Compare_tg_0_25deg_yearmeans_1981-2010_v21_0e_nc_baselayers_world_polygons_tg_baselayers_overlay_2010-07-15T00-00-00Z.png" ></a></td>
</tr>
</table>
<hr>
<table>
  <tr>
    <td><a href="../images/comparepage/v22.0e_v21.0e/Compare_tg_0_25deg_diff_yearmeans_19812010_v22_0e-v21_0e_nc_baselayers_world_polygons_tg_baselayers_overlay_2010-07-15T00-00-00Z_large.png"><img alt="" src="../images/comparepage/v22.0e_v21.0e/Compare_tg_0_25deg_diff_yearmeans_19812010_v22_0e-v21_0e_nc_baselayers_world_polygons_tg_baselayers_overlay_2010-07-15T00-00-00Z.png" ></a></td>
  </tr>
</table>
<br><br>
This figure shows the difference in annual 1981-2010 climatology for mean temperature (&#176;C) between E-OBS v22.0e and v21.0e.
<br><br>
<h3>Standard deviation in daily differences</h3>
<table>
  <tr>
    <td><a href="../images/comparepage/v22.0e_v21.0e/Compare_tg_0_25deg_std_daily_v22_0e-v21_0e_nc_baselayers_world_polygons_tg_baselayers_overlay_1984-12-31T00-00-00Z_large.png"><img alt="" src="../images/comparepage/v22.0e_v21.0e/Compare_tg_0_25deg_std_daily_v22_0e-v21_0e_nc_baselayers_world_polygons_tg_baselayers_overlay_1984-12-31T00-00-00Z.png" ></a></td>
  </tr>
</table>
<br><br>
This figure shows the standard deviation in daily differences for mean temperature (&#176;C) between E-OBS v22.0e and v21.0e.

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
    
  </body>
</html>

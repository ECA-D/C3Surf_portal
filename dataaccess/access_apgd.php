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
    <title>APGD data access</title>
    
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
		  <h1 id="page-title" class="title">APGD data access</h1>
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
		<h2 class="element-invisible">You are here</h2><div class="breadcrumb"><span class="inline odd first"><a href="../surfobs.php">Home</a></span><span class="delimiter">&raquo;</span> <span class="inline even last"><a href="access_apgd.php">APGD data access</a></span></div>

		<!-- Main part -->
		<div id="block-system-main" class="block block-system col-xs-12 col-sm-12 col-md-12 col-lg-12 clearfix">

APGD (Alpine precipitation grid dataset) is a high-resolution grid
dataset of daily precipitation developed at MeteoSwiss and covering
the entire Alpine region. It was established as part of the EU FP7
<a href="http://www.euro4m.eu" target="_blank">EURO4M</a>
project. APGD incorporates more than 5500 rain-gauge measurements on
average per day for the Alpine sections of Austria, Croatia, France,
Germany, Italy, Slovenia and Switzerland. With 10-15 km station
spacing, the dataset is one of the densest in-situ observation
networks over a high-alpine topography worldwide.

Using APGD, a probabilistic precipitation analysis for the Alpine
region has been calculated (APGDEns) as part of the EU
FP7 <a href="http://www.uerra.eu" target="_blank">UERRA</a>
project. The method derives an ensemble that represents the Bayesian
predictive distribution of the available information from rain-gauge
data. The data is provided as ensembles of area-average precipitation
over more than 500 hydrological catchments in the Alps.
		  
More information can be found on
the <a href="https://www.meteoswiss.admin.ch/home/search.subpage.html/en/data/products/2015/alpine-precipitation.html"
target="_blank">APGD webpage</a>. For questions regarding the
datasets, please <a href="https://www.meteoswiss.admin.ch/home/form/customer-service.html" target="_blank">contact MeteoSwiss</a>.

		  <h3>Actual version and update policy</h3>
		  
		  APGD and APGDEns are static datasets (not updated).
		  <br>

		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		      <tr bgcolor="#941333" height="40px">
			<td width="25%"><span style="color:#FFFFFF;"><strong>Dataset</strong></span></td>
			<td width="25%"><span style="color:#FFFFFF;"><strong>Release date</strong></span></td>
			<td width="50%"><span style="color:#FFFFFF;"><strong>Period covered</strong></span></td>
		      </tr>
		      <tr>
			<td>APGD</td>
			<td>2013</td>
			<td>1971-01-01 - 2008-12-31</td>
		      </tr>
		      <tr bgcolor="#ffffff">
			<td>APGDEns</td>
			<td>2019</td>
			<td>1971-01-01 - 2008-12-31</td>
		      </tr>
		    </tbody>
		  </table>

		  <h3>APGD and APGDEns example visualizations</h3>
		  
		The files below contain visualizations of APGD and
		APGDEns for the period from 1971-2008 of some indices
		for precipitation over the Alps. The files are in JPEG
		format. The ensemble spread in APGDEns is expressed as
		the relative 95% interquantile.
		<br><br>

		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		      <tr bgcolor="#941333" height="40px">
			<td width="25%"><span style="color:#FFFFFF;"><strong>Dataset</strong></span></td>
			<td width="75%"><span style="color:#FFFFFF;"><strong>Index</strong></span></td>
		      </tr>
		      <tr>
			<td>APGD</td>
			<td><a href="../images/mean_annual_precip_APGD.jpg">Mean annual precipitation [mm/year]</a><br><a href="../images/Frequency_wet_days_APGD.jpg">Frequency of wet days (&geq;1 mm) [fraction]</a><br><a href="mean_annual_maximum_1-day_precipication_APGD.jpg">Mean of annual maximum daily precipitation [mm/d]</a></td>
		      </tr>
		      <tr bgcolor="#ffffff">
			<td>APGDEns</td>
			<td><a href="../images/Wet_day_intensity_median_APGDEns.jpg">Wet day (&geq;1 mm) intensity (median [mm]</a> | <a href="../images/Wet_day_intensity_spread_APGDEns.jpg">relative ensemble spread [-]</a><br><a href="Q95_median_APGDEns.jpg">95% quantile of daily precipitation (median) [mm]</a> | <a href="../images/Q95_spread_APGDEns.jpg">relative ensemble spread [-]</a></td>
		      </tr>
		    </tbody>
		  </table>
		
		<h3>Citation and acknowledgement</h3>
		
		Whenever you publish research or applications based on these gridded data products, you should include the following acknowledgement and citations.<br><br>

APGD:<br><br>

		Dataset DOI: 10.18751/Climate/Griddata/APGD/1.0
		<br><br>
		
    "Isotta, Francesco A.; Frei, Christoph; Weilguni, Viktor; Tadic, Melita Percec; Lassegues, Pierre; Rudolf, Bruno; Pavan, Valentina; Cacciamani, Carlo; Antolini, Gabriele; Ratto, Sara M.; Munari, Michela; Micheletti, Stefano; Bonati, Veronica; Lussana, Cristian; Ronchi, Christian; Panettieri, Elvio; Marigo, Gianni and Vertacnik, Gregor, 2014: The climate of daily precipitation in the Alps: development and analysis of a high-resolution grid dataset from pan-Alpine rain-gauge data, INTERNATIONAL JOURNAL OF CLIMATOLOGY, 34, 1657-1675, doi: 10.1002/joc.3794" <img src="../images/html.gif" width="15" height="15" alt="" border="0"><a href="https://doi.org/10.1002/joc.3794" target="_blank">Website</a>
		<br><br>
		
APGDEns:
		<br><br>
"Frei, Christoph and Isotta, Francesco A., 2019: Ensemble Spatial Precipitation Analysis from Rain-Gauge Data  Methodology and Application in the European Alps, JOURNAL OF GEOPHYSICAL RESEARCH  ATMOSPHERES, in review."
		
		<h3>Terms of use and access</h3>
 
APGD is freely available for non-commercial use upon registration on the <a href="https://www.meteoswiss.admin.ch/home/search.subpage.html/en/data/products/2015/alpine-precipitation.html" target="_blank">APGD webpage</a>. APGDEns is free for non-commercial research and non-commercial education projects <a href="https://www.meteoswiss.admin.ch/home/about-us/contact.html" target="_blank">upon request from MeteoSwiss</a>.		
		</div>	  
	      </div>
	      
	    </div> <!-- /.block -->
	  </div>
	</div>

       <?php include('../include/menu_portal.php'); ?>
     </div>	
    </div>
    <?php include('../include/footer.php'); ?>
    <?php include('../include/mobile_menu.php'); ?>
    
  </body>
</html>

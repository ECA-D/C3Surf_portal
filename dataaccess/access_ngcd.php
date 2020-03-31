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
    <title>NGCD data access</title>
    
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
		  <h1 id="page-title" class="title">NGCD data access</h1>
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
		<h2 class="element-invisible">You are here</h2><div class="breadcrumb"><span class="inline odd first"><a href="../surfobs.php">Home</a></span><span class="delimiter">&raquo;</span> <span class="inline even last"><a href="access_ngcd.php">NGCD data access</a></span></div>

		<!-- Main part -->
		<div id="block-system-main" class="block block-system col-xs-12 col-sm-12 col-md-12 col-lg-12 clearfix">

		  This is the access page for the Nordic Gridded Climate Dataset (NGCD) for precipitation and temperature for Northern Europe. For questions regarding NGCD, please contact us at <a href="mailto:&#110;&#103;&#99;&#100;&#64;&#109;&#101;&#116;&#46;&#110;&#111;?subject=Questions NGCD">&#110;&#103;&#99;&#100;&#64;&#109;&#101;&#116;&#46;&#110;&#111;</a>.
		  
		  
		  <h3>Actual version and update policy</h3>
		  
		  Met Norway will maintain and update the NGCD gridded dataset. 
		  <br>

		  <table border="0" style="padding: 8px; background: #f4f4f4; border-bottom: 1px solid #999; box-shadow: 0px 5px 5px #666; margin-bottom: 20px;" width="100%">
		    <tbody>
		      <tr bgcolor="#941333" height="40px">
			<td width="8%"><span style="color:#FFFFFF;"><strong>Release code</strong></span></td>
			<td width="15%"><span style="color:#FFFFFF;"><strong>Release date</strong></span></td>
			<td width="15%"><span style="color:#FFFFFF;"><strong>Software Version</strong></span></td>
			<td width="25%"><span style="color:#FFFFFF;"><strong>Period covered</strong></span></td>
			<td width="35%"><span style="color:#FFFFFF;"><strong>Modification</strong></span></td>    
		      </tr>
		      <tr>
			<td><a href="access_ngcd.php#datafiles">20.03</a></td>
			<td>March 2020</td>
			<td>0.1.0-beta</td>
			<td>1971-01-01 - 2019-12-31</td>
			<td></td>
		      </tr>
		      <tr bgcolor="#ffffff">
			<td><a href="access_ngcd.php#datafiles">19.09</a></td>
			<td>September 2019</td>
			<td>0.1.0-beta</td>
			<td>1971-01-01 - 2019-06-30</td>
			<td></td>
		      </tr>
		      <tr>
			<td><a href="access_ngcd.php#datafiles">19.03</a></td>
			<td>March 2019</td>
			<td>0.1.0-beta</td>
			<td>1971-01-01 - 2018-12-31</td>
			<td>Minor differences in number of
			precipitation series. Some differences in the
			temperature input. This is mostly caused by a
			removal of observation series shorter than two
			years.</td>
		      </tr>
		      <tr bgcolor="#ffffff">
			<td><a href="access_ngcd.php#datafiles">18.09</a></td>
			<td>September 2018</td>
			<td>0.1.0-beta</td>
			<td>1971-01-01 - 2018-06-30</td>
			<td>Small differences in the temperature
			input. Large increase in number of
			precipitation series within the NGCD domain
			throughout the period. The main
			reason for the increase is the addition of a
			large number of stations in northern Germany
			that falls within the analysis window, but has
			a minor effect of the gridded fields over
			Fennoscandia.</td>
		      </tr>
		      <tr>
			<td><a href="access_ngcd.php#datafiles">18.03</a></td>
			<td>March 2018</td>
			<td>0.1.0-beta</td>
			<td>1971-01-01 - 2017-12-31</td>
			<td>First release</td>
		      </tr>
		    </tbody>
		  </table>

			<h3><a id="datafiles" style="color: #000000">NGCD datafiles 1971-01-01 - 2019-12-31</a></h3>
		The datafiles contain gridded data for 2 types of dataset, 4 elements each: air temperature (daily minimum, maximum and average); daily total precipitation. They cover Norway, Finland and Sweden. The data files are in compressed NetCDF format.
		<br><br>

		The dataset is available through the <a href="https://thredds.met.no/thredds/catalog/ngcd/catalog.html" target="_blank">MET Norway Thredds Service</a>.

<br><br>

		<h3>Citation and acknowledgement</h3>
		
		Whenever you publish research or applications based on these gridded data products, you should include the following acknowledgement and citations.<br><br>

Type 1 datasets:<br><br>

    "Tveito, O.E., I. Bj&#248;rdal, A.O. Skjelv&#229;g, B. Aune (2005) A GIS-based agro-ecological decision system based on gridded climatology, Meteorol. Appl., 12, 57-68, doi:10.1017/S1350482705001490"
		<br><br>
		
    "Tveito, O.E., E.J. F&#248;rland, R. Heino, I. Hanssen-Bauer, H. Alexandersson, B. Dahlstr&#246;m, A. Drebs, C. Kern-Hansen, T. J&#243;nsson, E. Vaarby-Laursen and Y. Westman (2000) Nordic Temperature Maps, DNMI Klima 9/00 KLIMA, Norwegian Meteorological Institute" <img src="../images/html.gif" width="15" height="15" alt="" border="0"><a href="https://www.met.no/publikasjoner/met-report/met-report-2000/_/attachment/download/fd5c813f-c990-4701-b32d-1cd5739366b4:3c546bbb335949d58fdeb1e043bb335a9ee3a6fa/MET-report-09-2000.pdf" target="_blank">Website</a>
<br><br>
Type 2 datasets:
<br><br>
"Lussana, C., O.E. Tveito and F. Uboldi (2018), Three-dimensional spatial interpolation of 2m temperature over Norway. Q.J.R. Meteorol. Soc., doi:10.1002/qj.3208" <img src="../images/html.gif" width="15" height="15" alt="" border="0"><a href="http://onlinelibrary.wiley.com/doi/10.1002/qj.3208/full" target="_blank">Website</a>
<br><br>

    "Lussana, C., T. Saloranta, T. Skaugen, J. Magnusson, O.E. Tveito and J. Andersen (2018) seNorge2 daily precipitation, an observational gridded dataset over Norway from 1957 to the present day, Earth Syst. Sci. Data, 10, 235-249, doi:10.5194/essd-10-235-2018" <img src="../images/html.gif" width="15" height="15" alt="" border="0"><a href="https://www.earth-syst-sci-data.net/10/235/2018/essd-10-235-2018.html" target="_blank">Website</a>
		
		<h3>Terms of use</h3>
 
		The NGCD dataset is available under the <a href="https://data.norge.no/nlod/en/1.0" target="_blank">Norwegian Licence for Open Government Data (NLOD) 1.0</a>.
		
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
